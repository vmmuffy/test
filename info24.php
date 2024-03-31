<?php
class Post {
  private int $id;
  private int $likes = 0;
  
  public function setId($i) {
      $this -> id = $i;
  }
  
  public function getId() {
      return $this -> id;
  }
  
  public function setLikes($n) {
      $this -> likes = $n;
  }
  
  public function getLikes() {
      return $this -> likes;
  }
  
}

class Foto extends Post {
  private $url;
  
  public function __construct($id) {
      $this -> setId($id);
  }
  
  public function setUrl($u) {
      $this -> url = $u;
  }
  
  public function getUrl() {
      return $this -> url;
  }
}

$foto = new Foto(15);
$foto ->setLikes(79);
$foto ->setUrl('htwm');

echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." likes - ".$foto->getUrl();