<?php
class Post {
    public $likes = 0;
    public $comments = [];
    public $author;
}

$post1 = new Post();
$post1->likes = 10;

$post2 = new Post();
$post2->likes = 3;

echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";