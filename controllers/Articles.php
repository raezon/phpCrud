<?php



class Articles extends Controller
{

    public function index()
    {
        //Ici on va recuperer les données en utilsant une méthode qui va retourner tous les articles de notre table article
        $articles = [
            'title' => 'PHP MVC Framework',
            'description' => 'Simple social network built using PHP/MVC.'
        ];
        $this->view('articles/index', $articles);
    }
}
