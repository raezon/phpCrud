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
                /*if (!class_exists('Error')) {
                    require_once './controllers/Error.php'; // Include Error class if not already included
                }*/
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
    
        public function  getUrl()
        {

            
            if (isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }
    