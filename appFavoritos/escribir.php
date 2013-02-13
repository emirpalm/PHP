<?php

session_start();

$conexion = sqlite_open('favoritos.db');

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion = $_POST['valoracion'];

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$consulta =

<<<SQL

INSERT INTO favoritos VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion')

SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);

echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Your Page Title</title>
<meta http-equiv="REFRESH" content="0;url=principal.php"></HEAD>
<BODY>
Optional page text here.
</BODY>
</HTML>';

?>
