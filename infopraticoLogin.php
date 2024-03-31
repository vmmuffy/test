<?php
session_start();
?>

<html>
 <head>
   <title>Formulario de Login</title>
   </head>
   <body>
     <h1>Qual o seu nome?</h1>
<?php

if(!empty($_SESSION['erro'])) {
  echo $_SESSION['erro'];
  unset ($_SESSION['erro']);
}
?>

<formaction = "form.php" method = 'POST'>
  <input name = 'nome' type = 'text'><br/>
  <input type = 'submit' value = 'salvar'>
</form>
</body>
</html>
