
<?php
echo "hello world";
require '../app/persistances/blogPostData.php';
$arrayBlogPost = lastBlogPost($pdo);

var_dump($arrayBlogPost);