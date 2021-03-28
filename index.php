<?php
//Creation dun system de routage

$url = '';
if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}


if ($url == '') {
    require 'view/articles/index.php';
} elseif ($url[0] == '' and !empty($url[1])) {
    echo 'aaa' . $url[1];
}
