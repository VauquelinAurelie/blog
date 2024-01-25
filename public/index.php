<?php

include '../config/database.php';

$routes = [ //lien vers les différentes pages
    'home' =>"../app/controllers/homeController.php",
    "404" => '../ressources/views/errors/404.php',

];
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if ($action == null){
    $action = 'home';
}

if ($action=='home'){
    require $routes['home'];
}

