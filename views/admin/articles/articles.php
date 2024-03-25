<?php
class ArticlesView
{
    //NavBar
    static function getNavBar()
    {
        echo '
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="articles">Liste des Articles <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="articles/addArticleForm">Ajouter un article<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
        ';
    }
    //Avoire le contenu du titre du crud
    static function getTableTitle()
    {
        echo '<div class="table-title">
                    <div class="row">
          
                        <div class="col-sm-6">
                        <a href="#addArticleModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Article</span></a>
                        <a href="#deleteArticlesModal" id="selectAll" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Suprimer</span></a>
                        </div>
                    </div>
             </div>';
    }
    //Avoir le contenu du header de la table
    static function getTableThead()
    {
        echo '<thead>
                 <tr>
                     <th>
                         <span class="custom-checkbox">
                             <input type="checkbox" id="checkbox1"/>
                             <label for="checkbox1"></label>
                         </span>
                     </th>
                     <th>ID</th>
                     <th>Nom</th>
                     <th>Mark</th>
                     <th>Prix</th>
                     <th>Description</th>
                     <th>Actions</th>
                 </tr>
             </thead>';
    }
    //Avoir le contenu du body de la table

    static function getTableBody($articles)
    {
        echo '<tbody>';
        foreach ($articles as $article) {
    
            echo  ' <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="articleId[]" value="' . $article->id . '">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>' . $article->id . '</td>
                        <td>' . $article->nom . '</td>
                        <td>' . $article->mark . '</td>
                        <td>' . $article->prix . '</td>
                        <td>' . $article->description . '</td>
                        <td>
                            <input type="hidden" id="beforeUpdateArticleId' . $article->id . '" name="beforeUpdateArticleId" value=" ' . $article->id . '  "/>
                            <a href="#editArticleModal" id="beforeUpdateArticleId' . $article->id . '"  class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="articles/delete/id=' . $article->id . '" class="delete" ><i class="material-icons"  title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>';
        }
        echo     '</tbody>';
    }
    

    static function addArticleForm()
    {

        echo '<!-- Add Modal HTML -->
                      
                <form action="articles/addArticle" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Ajouter un article</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label>Prix</label>
                            <input type="number" class="form-control" name="prix" required>
                        </div>
                        <div class="form-group">
                            <label>Mark</label>
                            <textarea class="form-control" name="mark" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Etat Produit</label>
                            <select  name="actif" id="etat" required>
                                <option value="">Choisir un champ </option> 
                                <option value="y">ative</option>
                                <option value="n">disactive</option>

                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>';
    }
    static function JSFunctionPourRecuperTousLesIDSelectionPourOperationDelete()
    {
        echo '	<script src="/web/assets/js/functionPourRecuperTousLesIDSelectionPourOperationDelete.js"></script>';
    }
    static function JSFunctionPourEnvoyerIDpouEdit()
    {

        echo '	<script src="/web/assets/js/functionPourEnvoyerIDpouEdit.js"></script>';
    }

    static function getTable($articles)
    {

        self::getTableTitle();
        echo '<table class="table table-striped table-hover">';
        self::getTableThead();
        self::getTableBody($articles);
        echo ' </table>';

        //Include Le js la fin du code Html
        self::JSFunctionPourRecuperTousLesIDSelectionPourOperationDelete();
        self::JSFunctionPourEnvoyerIDpouEdit();
    }
}
