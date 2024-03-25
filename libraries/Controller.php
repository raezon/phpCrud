<?php
/*
     * Base Controller
     * Loads the models and views
     */
class Controller
{
    // Load model
    public function model($model)
    {
        // Require model file
        require_once './models/' . $model . '.php';

        //Instantiate model
        return new $model();
    }

    // Load view
    public function view($view, $data = [])
    {
        // Check for view file
        if (file_exists('./views/' . $view . '.php')) {
            require_once('./views/' . $view . '.php');
        } else {
            /// View does not exists
            die('View does not exists');
        }
    }

        // Method to perform redirection based on the base URL
        public function redirect($method)
        {
            // Get the current URL path
            $currentUrl = $_SERVER['REQUEST_URI'];

            // Parse the URL to extract the path
            $urlParts = parse_url($currentUrl);
    
            // Get the path component from the parsed URL
            $path = $urlParts['path'];
    
            // Explode the path into an array using '/' as the delimiter
            $pathParts = explode('/', $path);
    
            // Extract the base URL from the path
            $baseUrl = $pathParts[1]; // Assuming the base URL is the second element
           
            header("Location: /$baseUrl/$method");
            exit; // Make sure to exit to prevent further execution
        }
}
