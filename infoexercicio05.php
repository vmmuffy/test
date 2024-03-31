<?php 
class Calculator {
  
  private float $number;
  
  public function __construct() {
    $this -> $number = 0;
  }
  
  public function float add($numero)
    $this -> $number += $numero;
    
  public function sub($numero)
    $this -> $number -= $numero;
    
  public function multiply($numero)
    $this -> $number *= $numero;
    
  public function divide($numero)
    $this -> $number /= $numero;
    
  public function getTotal() {
    return $this -> $number;
  }
  
  public function clear()
    $this -> $number = 0;
}