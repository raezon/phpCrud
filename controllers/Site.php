<?php


class Site extends Controller
{
 
    // Page d'accueil
    public function index()
    {
        // Use the helper function to get the singleton instance of Engine
        return renderTemplate('client/site/index', ['title' => 'Djebabla']);
    }

    public function about()
    {
        // Use the helper function to get the singleton instance of Engine
        return renderTemplate('client/site/about', ['title' => 'Djebabla']);
    }

    public function notFound()
    {
        // Use the helper function to get the singleton instance of Engine
        return renderTemplate('error/index', ['title' => 'Djebabla']);
    }


}
