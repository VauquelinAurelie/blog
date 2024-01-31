<?php
//liste des 10 deniers articles du blog avec leurs auteurs
global $articlesId;
function lastBlogPost(PDO $pdo)
{
    $query = "SELECT articles.id, articles.title, articles.content, articles.publication, authors.pseudo 
        FROM articles
        INNER JOIN authors ON authors.id = articles.authors_id
        ORDER BY articles.id DESC
        LIMIT 10";
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

// Afficher les commentaires de l'article affiché
function commentsByBlogPost(PDO $pdo, $articlesId)
{
    $commentPost = "SELECT comments.id, comments.content, comments.date_publication
        FROM comments
        INNER JOIN articles ON articles.id = comments.articles_id
        WHERE comments.articles_id = $articlesId";
    $resultCommentPost = $pdo->query($commentPost);
    return $resultCommentPost->fetchAll(PDO::FETCH_ASSOC);
}

// Créer un article
function blogPostCreate(PDO $pdo, $title, $content, $rating)
{
    $createPost = "INSERT INTO articles (title, content, publication, end_publication, rating, authors_id) 
        VALUES ('$title', '$content', NOW(), '2024-03-15', '$rating', 1)";
    $pdo->query($createPost);
    header('Location: index.php?action=home');
}

// Modifier un article
function blogPostUpdate(PDO $pdo, $articlesId, $title, $content, $rating)
{
    $updatePost = "UPDATE articles
    SET title = '$title', content = '$content', rating = '$rating'
    WHERE id = '$articlesId'";
    $pdo->query($updatePost);

}

//Supprimer un article
function blogPostDelete(PDO $pdo, $articlesId):void
{
    $deletePost = "DELETE FROM articles
    WHERE id = '$articlesId'";
    $pdo->query($deletePost);
}