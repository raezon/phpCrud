<?php


class Site extends Controller
{
 
    // Page d'accueil
    public function index()
    {
        // Use the helper function to get the singleton instance of Engine
        return renderTemplate('site/index', ['title' => 'Djebabla']);
    }

    public function about()
    {
        // Use the helper function to get the singleton instance of Engine
        return renderTemplate('site/about', ['title' => 'Djebabla']);
    }


}
