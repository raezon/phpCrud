<?php

class Articles extends Controller
{
    private $articlesModel;

    public function __construct()
    {
        $this->articlesModel = $this->model('Article');
    }

    // Page d'accueil
    public function index()
    {
        // Récupération des articles depuis le modèle
        $articles = $this->articlesModel->getArticles();
        $data = [
            'articles' => $articles
        ];
        $this->view('articles/index', $data);
    }

    // Ajouter un nouvel article
    public function addArticle()
    {
        $this->articlesModel->addArticle($_POST);
        header("Location: /articles");
    }

    // Afficher le formulaire d'ajout d'article
    public function addArticleForm()
    {
        $this->view('articles/addArticleForm');
    }

    // Modifier un article
    public function update()
    {
        $this->articlesModel->update($_POST);
        header("Location: /articles");
    }

    // Supprimer un article
    public function delete($id)
    {
        $this->articlesModel->deleteArticle($id);
        header("Location: /articles");
    }

    // Supprimer tous les articles sélectionnés
    public function deleteAllArticles()
    {
        $this->articlesModel->deleteAllArticle($_POST['deleteAllArray']);
        header("Location: /articles");
    }
}
