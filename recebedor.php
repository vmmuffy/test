<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

if($nome && $email) {
  
  $expiracao = time() + (86400 * 30);
  setcookie('nome', $nome, $expiracao);
  
  echo "Nome: ".$nome."<br/>";
  echo "Email: ".$email."<br/>";
  echo "Idade: ".$idade;
} else {
  $_SESSION['aviso'] = "Preencha as colunas corretamente!";
  
  header("Location: info17.php");
  exit;
}