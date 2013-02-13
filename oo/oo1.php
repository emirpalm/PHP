<?php

class Persona{
  private $nombre;
  private $edad;
  
  function dameNombre($unNombre){
  $this->nombre = $unNombre;
	}
  
  function dimeNombre(){
  return this->nombre;
	}
}
$manolo = new Persona();
$manolo->dameNombre('Manolo');

?>