<?php
require '../ressources/views/blogPostCreate.tpl.php';
require '../app/persistances/blogPostData.php';

global $pdo;
try {
    blogPostCreate($pdo, $_POST['title'], $_POST['content'], $_POST['rating']);
} catch (Exception $e) {
echo 'Exception reçue : ' . $e->getMessage(), "\n";
}