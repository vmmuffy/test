<?php
class Matematica {
  
  public static string $nome = 'Carol';
  
  public static function somar($a, $b) {
      return $a + $b;
  }
  
}

/*echo Matematica::somar(10, 30);*/
echo Matematica::$nome;