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
 

        return renderTemplate('admin/articles/index', ['articles' => $articles]);
    }

    // Ajouter un nouvel article
    public function addArticle()
    {
        $this->articlesModel->addArticle($_POST);
        $this->redirect('articles');
    }

    // Afficher le formulaire d'ajout d'article
    public function addArticleForm()
    {
    
        return renderTemplate('admin/articles/addArticleForm', []);
    }

    // Modifier un article
    public function update()
    {
        $this->articlesModel->update($_POST);
        $this->redirect('articles');
    }

    // Supprimer un article
    public function delete($id)
    {
 
        $this->articlesModel->deleteArticle($id);
        $this->redirect('articles');

    }

    // Supprimer tous les articles sélectionnés
    public function deleteAllArticles()
    {
        $this->articlesModel->deleteAllArticle($_POST['deleteAllArray']);
        $this->redirect('articles');
    }
}
