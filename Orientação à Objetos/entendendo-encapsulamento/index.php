<?php
class Post {
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function aumentarLike() {
        $this -> likes++;
    }

    public function setAuthor($n) {
        $this -> author = $n;
    }

    public function getAuthor() {
        return $this -> author;
    }
}

$post1 = new Post();
$post1 -> setAuthor('Gustavo');

$post2 = new Post();
$post2 -> setAuthor('Fulano');

echo "POST 1: ".$post1->likes." likes - ".$post1->getAuthor()."<br/>";
echo "POST 2: ".$post2->likes." likes - ".$post1->getAuthor()."<br/>";