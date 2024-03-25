<?php



class Produit extends Controller
{
 

    private $productModel;

    public function __construct()
    {
        $this->productModel = $this->model('ProduitModel');
    }

    // Page d'accueil
    public function index()
    {
      
        // Use the helper function to get the singleton instance of Engine
        $produits=$this->productModel->getAllProducts();
   
       return renderTemplate('client/produit/index', ['produits' => $produits]);
    }



}
