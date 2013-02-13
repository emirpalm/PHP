<?php

$conexion = sqlite_open('bibliotecacd.db');

$consulta = "DELETE FROM Discos WHERE Artista='Queen'";

$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);

?>