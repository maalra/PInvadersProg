<?php

class ia
{
//declaracion de un metodo
public $columna= '3';
public $fila= '1';
//declaracion de metodo
public function getcolumna(){
  $this->columna = rand (1,3);
return $this->columna;
}
public function getfila(){
  $this->fila = rand (1,3);
  return $this->fila;
}
}
?>
