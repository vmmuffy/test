<?php
session_start();

if(empty($_SESSION['nome'])) {
  header("Location: infopraticoLogin.php");
}
?>

<html>
 <head>
   <title>Página</title>
 </head>
 <body>
   <h1>Olá, <?php echo $_SESSION['nome']; ?> 
   <a href="infoLogout.php"> Sair </a> </h1>
 </body>
</html>