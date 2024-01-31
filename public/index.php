<?php

include '../config/database.php';
//lien vers les différentes pages de controller
$routes = [
    'home' =>"../app/controllers/homeController.php",
    "404" => '../ressources/views/errors/404.php',
    'blogpost' => '../app/controllers/blogPostController.php',
    'createPost' => '../app/controllers/blogPostCreateController.php',
    'blogPostModify' => '../app/controllers/blogPostModifyController.php',
    'blogPostDelete' => '../app/controllers/blogPostDeleteController.php',
];
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
require $routes[$action];
