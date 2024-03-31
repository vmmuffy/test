<?php
spl_autoload_register(function($class){
  
});


$m = new Matematica();
echo $m->somar(15, 20);