<?php
class Modal
{
    static function getAddModal()
    {
        echo '<!-- Add Modal HTML -->
                    <div id="addArticleModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="articles/addArticle" method="post">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Articles</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="nom" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Mark</label>
                                            <input type="text" class="form-control" name="mark" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Prix</label>
                                            <input type="number" class="form-control" name="prix" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Etat Article</label>
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
                                </form>
                            </div>
                        </div>
                    </div>';
    }
    static function getEditModal()
    {
        echo '<!-- Edit Modal HTML -->
                    <div id="editArticleModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="articles/update" method="post">
                                <input type="hidden" value="-1" id="updateArticleId" name="updateArticleId"/>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Product</h4>
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
                                            <input type="text" class="form-control" name="mark" required></input>
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
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>';
    }
    static function getModalDelete()
    {
        echo '	<!-- Delete Modal HTML -->
                <div id="deleteArticlesModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <form action="articles/deleteAllArticles" method="post">
                                <input type="hidden" value="-1" id="deletAll" name="deleteAllArray"/>
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Produit</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete these Records?</p>
                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>';
    }


    static function DisplayModal()
    {
        self::getAddModal();
        self::getEditModal();
        self::getModalDelete();
    }
}
