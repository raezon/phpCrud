<?php



class LandingPage extends Controller
{

    public function index()
    {
        //Ici on va recuperer les données en utilsant une méthode qui va retourner tous les articles de notre table article

        $this->view('landingpage/index');
    }
}
