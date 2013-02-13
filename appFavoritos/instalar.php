<?php
//Abrir o crear base de datos
$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');

//Crear tabla favoritos
$consulta = 
<<<SQL

CREATE TABLE favoritos(

usuario Char(40) Not Null,
contrasena Char (40) Not Null,
titulo Char(20) Not Null,
direccion Char(100) Not Null,
categoria Char (20),
comentario Char(40),
valoracion Int

);

SQL;

$resultado = sqlite_exec($conexion , $consulta);

sqlite_close($conexion);

//insertar contenido de prueba

$conexion = sqlite_open('favoritos.db');

$consulta =

<<<SQL

INSERT INTO favoritos VALUES ('jocarsa','jocarsa','Google','http://www.google.com','Buscadores','Pagina muy famosa',10);
INSERT INTO favoritos VALUES ('jocarsa','jocarsa','jocarsa','http://www.jocarsa.com','Personal','Mi propia página',10);


SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);

//Crear tabla usuarios

$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');

$consulta = 
<<<SQL

CREATE TABLE usuarios(
usuario Char(40) Not Null,
contrasena Char (40) Not Null,
nombre Char(20) Not Null,
apellido Char (20),
edad Int,
permisos Int

);

SQL;

$resultado = sqlite_exec($conexion , $consulta);

sqlite_close($conexion);

//insertar contenido de prueba

$conexion = sqlite_open('favoritos.db');

$consulta =

<<<SQL

INSERT INTO usuarios VALUES ('jocarsa','jocarsa','Jose Vicente','Carratala',32,1);



SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);

//Crear tabla categorias

$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');

$consulta = 
<<<SQL

CREATE TABLE logs(
utc Int,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char(40),
navegador Char(80),
usuario Char(40),
contrasena Char(40)

);

SQL;

$resultado = sqlite_exec($conexion , $consulta);

sqlite_close($conexion);

//insertar contenido de prueba

$conexion = sqlite_open('favoritos.db');

$consulta =

<<<SQL

INSERT INTO logs VALUES (00000,2011,02,07,19,38,00,'127.0.0.10','chrome','jocarsa','jocarsa');



SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);


?>
