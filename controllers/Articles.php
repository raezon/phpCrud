<?php



class Articles extends Controller
{

    public function __construct()
    {

        $this->articlesModel = $this->model('Article');
    }

    public function index()
    {
        //Ici on va recuperer les données en utilsant une méthode qui va retourner tous les articles de notre table article
        $articles = $this->articlesModel->getArticles();
        $data = [
            'articles' => $articles
        ];
        $this->view('articles/index', $data);
    }
    public function deletearticles($id)
    {
        //Ici on va recuperer les données en utilsant une méthode qui va retourner tous les articles de notre table article
        die();
        $this->articlesModel->deleteArticle($id);
        $articles = $this->articlesModel->getArticles();
        $data = [
            'articles' => $articles
        ];
        $this->view('articles/index', $data);
    }
}
