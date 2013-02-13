<?php

$conexion = sqlite_open('bibliotecacd.db') or die('Ha sido imposible establecer la conexion');

$consulta = 
<<<SQL

CREATE TABLE Discos(

Artista Char(20) Not Null,
Disco Char(40),
Anio Integer

);

SQL;

$resultado = sqlite_exec($conexion , $consulta);



?>