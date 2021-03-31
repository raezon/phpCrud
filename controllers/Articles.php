<?php



class Articles extends Controller
{

    public function __construct()
    {

        $this->articlesModel = $this->model('Article');
    }

    //page d'acceuil
    public function index()
    {
        //Ici on va recuperer les données en utilsant une méthode qui va retourner tous les articles de notre table article
        $articles = $this->articlesModel->getArticles();
        $data = [
            'articles' => $articles
        ];
        $this->view('articles/index', $data);
    }
    //Ajouter un nouveau article
    public function addArticle()
    {
        $this->articlesModel->addArticle($_POST);
        header("Location: /Nacer_Brahim/articles");
    }
    public function addArticleForm()
    {
        $this->view('articles/addArticleForm');
    }
    //Modifier un article
    public function update()
    {

        //Ici on va recuperer les données en utilsant une méthode qui va retourner tous les articles de notre table article
        $this->articlesModel->update($_POST);
        header("Location: /Nacer_Brahim/articles");
    }
    //Suprimer un article
    public function delete($id)
    {
        //Ici on va recuperer les données en utilsant une méthode qui va retourner tous les articles de notre table article
        $this->articlesModel->deleteArticle($id);

        header("Location: /Nacer_Brahim/articles");
    }
    //Suprimer tous les articles selectioner
    public function deleteAllArticles()
    {

        $this->articlesModel->deleteAllArticle($_POST['deleteAllArray']);
        header("Location: /Nacer_Brahim/articles");
    }
}
