<?php
/*
    * App Core Class
    * Create URL & load core controller
    * URL FORMAT - /controller/method/params
    */

class Core
{

    protected $currentController = 'article';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        // Look in controllers for first value

        if (empty($url[0])) {
            $this->currentController = 'site';
        } else
	            if (file_exists('./controllers/' . ucwords($url[0]) . '.php')) {
            // If exists, set as controller
            $this->currentController = ucwords($url[0]);
            // Unset 0 url
            unset($url[0]);
        }



        // Require the controller
        require_once './controllers/' . $this->currentController . '.php';

        // Instantiate controller class
        $this->currentController =  new $this->currentController;

        // Check for second part of url
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        // Get params
        $this->params = $url ? array_values($url) : [];
        if (!empty($url[2]))
            if (array_key_exists(2, $url)) {
                $this->params = array();
                $url_apres_explode = explode("=", $url[2]);
                if (array_key_exists(1, $url_apres_explode))
                    $this->params[] = $url_apres_explode[1];
            }


        //Call a callback with array of params
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
