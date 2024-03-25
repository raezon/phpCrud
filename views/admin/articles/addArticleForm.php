<?php $this->layout('layout/admin-parent', ['title' => 'Admin Dashboard']) ?>
    <div class="container-xl">
        
        <div class="table-responsive">
            <div class="table-wrapper">

                <?= ArticlesView::addArticleForm() ?>
            </div>
        </div>
    </div>

