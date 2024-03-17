<?php

// HomeController.php
require 'vendor/autoload.php';

use League\Plates\Engine;

class Site extends Controller
{
 
    // Page d'accueil
    public function index()
    {
        $templates = new Engine('views');
        echo $templates->render('site/index', ['title' => 'Home']);
       // $data=[];
       // $this->view('site/index', $data);
    }


}
