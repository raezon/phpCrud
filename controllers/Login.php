<?php


class Login extends Controller
{
 
    // Page d'accueil
    public function index()
    {
        // Use the helper function to get the singleton instance of Engine
        return renderTemplate('authentication/login', ['title' => 'Authentifcation']);
    }


}
