<?php



class About extends Controller
{
 

    private $productModel;

    public function __construct()
    {
        
    }

    // Page d'accueil
    public function index()
    {
      

       return renderTemplate('client/about/index', []);
    }



}
