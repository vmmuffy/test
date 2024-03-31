<?php
setcookie('nome', '', time() - 3600);


header("Location: info17.php");
exit;