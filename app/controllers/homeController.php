
<?php
require '../app/persistances/blogPostData.php';

global $pdo;
$arrayBlogPost = lastBlogPost($pdo);

include '../ressources/views/home.tpl.php';