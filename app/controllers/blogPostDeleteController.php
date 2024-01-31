<?php
require '../app/persistances/blogPostData.php';
global $articlesId;
global $pdo;

$delete = blogPostDelete($pdo, $articlesId);
header('Location: index.php?action=home'); //la redirection ne fonctionne pas
exit;