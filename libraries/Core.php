<?php
class Core
{
    protected $currentController = 'Site'; // Default controller
    protected $currentMethod = 'index'; // Default method
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();



        // Look for the first segment (controller)
        if (!empty($url[1]) && file_exists('./controllers/' . ucwords($url[1]) . '.php')) {
  
            $this->currentController = ucwords($url[1]);
            unset($url[1]);
        }


        // Require the controller
        require_once './controllers/' . $this->currentController . '.php';

        // Instantiate controller class
        $this->currentController = new $this->currentController;

        // Look for the second segment (method)
        if (!empty($url[2]) && method_exists($this->currentController, $url[2])) {
            $this->currentMethod = $url[2];
            unset($url[2]);
        }

        // Get parameters, if any
        $this->params = $url ? array_values($url) : [];

        // Call the controller method with parameters
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            
            // Ajouter le préfixe 'phpCrud/' au début du chemin
            $url = 'phpCrud/' . $url;
            
            return explode('/', $url);
        }
    }
    
}
?>
