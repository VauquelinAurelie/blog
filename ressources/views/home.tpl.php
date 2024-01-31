<?php
include '../ressources/views/layouts/header.tpl.php';


if (!isset($arrayBlogPost)){
    echo "pas d'articles correspondants";
}else {
    foreach ($arrayBlogPost as $row) {
        echo $row["id"]."<br>";
        echo $row["title"]."<br>";
        echo $row["content"]."<br>";
        echo $row["publication"]."<br>";
        echo $row["end_publication"]."<br>";
        echo $row["rating"]."<br>";
        echo $row["authors_id"]."<br>";
        echo $row["pseudo"]."<br>";
        echo $row["name"]."<br><br>";
    }
}

include '../ressources/views/layouts/footer.tpl.php';