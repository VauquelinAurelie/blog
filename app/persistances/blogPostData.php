<?php
//liste des 10 deniers articles du blog avec leurs auteurs
function lastBlogPost ($pdo){
     $query = "SELECT
    articles.id, title, publication, authors.name
FROM
    articles
        INNER JOIN
    authors
    ON
        articles.authors_id = authors.id
WHERE
    articles.id < 11
  AND
    publication >2023-03-10
ORDER BY
    articles.id ASC";
    return $pdo->query ($query)->fetchAll(PDO::FETCH_ASSOC);
}
