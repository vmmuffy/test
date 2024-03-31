<?php
class Post {
  public int $id;
  public  int $likes = 0;
  public $comments = [];
  private string $author;
  
 /* public function __construct($postId) {
    $this -> id = $postId;
    // Verificar o banco de dados para pegar informações do Post $id
    $this -> likes = 12 * $postId;
  }
  */
  
  public function aumentarLike() {
      $this -> likes++;
  }
  
  public function setAuthor($n) {
      if(strlen($n >= 2)) {
          $this -> author = ucfirst($n);
      }
  }
  
  public function getAuthor() {
      return $this -> author;
  }
}

$post1 = new Post();
$post1 -> setAuthor('c');

$post2 = new Post();
$post2 -> setAuthor('Fernando');

echo "Post1: ".$post1 -> likes." likes - ".$post1 -> getAuthor()."<br/>";
echo "Post2: ".$post2 -> likes." likes - ".$post2 -> getAuthor()."<br/>";