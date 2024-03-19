<?php
/*
    * App Core Class
    * Create URL & load core controller
    * URL FORMAT - /controller/method/params
    */

    class Core
    {
        protected $currentController = 'site';
        protected $currentMethod = 'index';
        protected $params = [];
    
        public function __construct()
        {
            $url = $this->getUrl();
    
            // Look in controllers for first value
            if (empty($url[0])) {
                $this->currentController = 'site';
            } elseif (file_exists('./controllers/' . ucwords($url[0]) . '.php')) {
                // If exists, set as controller
                $this->currentController = ucwords($url[0]);
                // Unset 0 url
                unset($url[0]);
            } else {
                // Controller file doesn't exist, set to error controller
                $this->currentController = 'errors'; // Change to your error controller name
            }
    
            // Require the controller
            require_once './controllers/' . $this->currentController . '.php';
    
            // Instantiate controller class
            $this->currentController = new $this->currentController;
    
            // Check for second part of URL
            if (isset($url[1])) {
                if (method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }
    
            // Get params
            $this->params = $url ? array_values($url) : [];
    
            // Call a callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }
    
        public function getUrl()
        {
            $baseUrl = getenv('BASE_URL'); // Retrieve base URL from environment variable
            $baseUrl = rtrim($baseUrl, '/');
            $requestUri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
    
            // Replace '../web' with the base URL if found at the beginning of the request URI
            if (strpos($requestUri, '../web') === 0) {
                $requestUri = $baseUrl . substr($requestUri, 7);
            }
    
            // Explode URL and return
            $url = rtrim($requestUri, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
    }
    