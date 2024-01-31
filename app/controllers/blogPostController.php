<?php
//Afficher un article avec son auteur et les commentaires
require '../app/persistances/blogPostData.php';

global $pdo;
global $articlesId;
$articlesId=filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);
$article = blogPostById($pdo, $articlesId);
$comments = commentsByBlogPost($pdo, $articlesId);

include '../ressources/views/blogPost.tpl.php';