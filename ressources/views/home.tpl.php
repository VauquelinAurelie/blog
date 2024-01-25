<?php
include '../ressources/views/layouts/header.tpl.php';

//var_dump($arrayBlogPost);

if (!isset($arrayBlogPost)){
    echo "pas d'articles correspondants";
}else {
    foreach ($arrayBlogPost as $row) {
        echo $row["id"];
        echo $row["title"] . "     ";
        echo $row["content"] . "     ";
        echo $row["publication"] . "     ";
        echo $row["end_publication"] . "     ";
        echo $row["rating"] . "     ";
        echo $row["authors_id"] . "     ";
        echo $row["id"] . "     ";
        echo $row["pseudo"] . "     ";
        echo $row["name"] . "     <br>";
    }
}

include '../ressources/views/layouts/footer.tpl.php';