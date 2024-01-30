<?php
include '../ressources/views/layouts/header.tpl.php';

if (!isset($article)){
    echo "pas d'articles correspondants";
}else {
    foreach ($article as $row) {
        echo $row["id"]."<br>";
        echo $row["title"]."<br>";
        echo $row["content"]."<br>";
        echo $row["publication"]."<br>";
        echo $row["pseudo"]."<br><br>";

    }

}
if (!isset($comments)){
    echo "pas d'articles correspondants";
}else {
    foreach ($comments as $row) {
        echo $row["content"]."<br>";
        echo $row["date_publication"]."<br>";
    }

}
include '../ressources/views/layouts/footer.tpl.php';