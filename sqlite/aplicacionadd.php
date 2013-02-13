<?php

$conexion = sqlite_open('bibliotecacd.db');

$adddisco = $_POST['Disco'];
$addartista = $_POST['Artista'];
$addanio = $_POST['Anio'];

$consulta =

<<<SQL

INSERT INTO Discos VALUES ('$addartista','$adddisco','$addanio')

SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);

echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Your Page Title</title>
<meta http-equiv="REFRESH" content="0;url=aplicacion.php"></HEAD>
<BODY>
Optional page text here.
</BODY>
</HTML>';

?>
