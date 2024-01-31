<?php
//modifier un article

require '../app/persistances/blogPostData.php';

global $pdo;
global $articlesId;

$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
$content = filter_input(INPUT_POST, "content", FILTER_SANITIZE_SPECIAL_CHARS);
$rating = filter_input(INPUT_POST, "rating", FILTER_SANITIZE_NUMBER_INT);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
    blogPostUpdate($pdo, $articlesId,$title, $content, $rating);

require '../ressources/views/blogPostUpdate.tpl.php';
header('location : index.php?action=home');