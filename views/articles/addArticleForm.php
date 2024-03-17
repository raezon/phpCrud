<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tp Crud Articles Ajouter Article</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="../web/assets/css/articles.css" rel="stylesheet" type="text/css" media="screen, projection">
    <script src="../web/assets/js/articles.js"></script>
</head>

<body>
    <div class="container-xl">
        <?= ArticlesView::getNavBar() ?>
        <div class="table-responsive">
            <div class="table-wrapper">

                <?= ArticlesView::addArticleForm() ?>
            </div>
        </div>
    </div>



</body>

</html>