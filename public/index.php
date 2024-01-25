<?php include '../config/database.php'; ?>
<?php
$metaTitle = 'Blog';
echo 'Bienvenue sur le blog';

$routes = [ //lien vers les différentes pages
    //"404" => '../ressources/views/errors/404.php';
    "home" => '../app/controllers/homeController.php',
];

$p = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//
if (array_key_exists($p, $routes)) {
    ob_start(); 
    include $routes[$p];
    $render = ob_get_clean();
    echo $render;
} else {
    http_response_code(404);
    include '../ressources/views/errors/404.php';
    exit;
}