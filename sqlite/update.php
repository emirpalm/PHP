<?php

$conexion = sqlite_open('bibliotecacd.db');

$consulta = "UPDATE Discos SET Artista ='Queen' WHERE Artista = 'Queeen'";

$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);

?>