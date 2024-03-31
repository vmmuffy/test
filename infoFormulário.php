<?php
session_start();

$nome = 
filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if(empty($nome)) {
  $_SESSION['erro'] = 'o nome não foi preenchido!';
  header("Location: infopraticoLogin.php");
} else {
  $_SESSION['nome'] = $nome;
};

header("Location: infoIndex.php");
