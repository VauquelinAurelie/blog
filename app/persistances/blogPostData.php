<?php
//liste des 10 deniers articles du blog avec leurs auteurs
function lastBlogPost(PDO $pdo)
{
    $query = "SELECT*
        FROM articles
        INNER JOIN authors ON articles.authors_id = authors.id
        WHERE articles.id < 11 AND publication >2023-03-10
        ORDER BY articles.id ASC";
    $Statement = $pdo->query($query);
    return $Statement->fetchAll(PDO::FETCH_ASSOC);
}

// Afficher un article avec son auteur
function blogPostById(PDO $pdo, $articlesId)
{
    $postById = "SELECT articles.id, articles.title, articles.content, articles.publication, articles.end_publication, authors.pseudo
        FROM articles
        INNER JOIN authors ON articles.authors_id = authors.id
        WHERE articles.id = $articlesId";
    $resultPostById = $pdo->query($postById);
    return $resultPostById->fetchAll(PDO::FETCH_ASSOC);
}

// Afficher les commentaires
function commentsByBlogPost(PDO $pdo, $articlesId)
{
    $commentPost = "SELECT comments.id, comments.content, comments.date_publication
        FROM comments
        INNER JOIN articles ON articles.id = comments.articles_id
        WHERE comments.articles_id = $articlesId";
    $resultCommentPost = $pdo->query($commentPost);
    return $resultCommentPost->fetchAll(PDO::FETCH_ASSOC);
}