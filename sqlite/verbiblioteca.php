<?php

echo"<table border=1><tr><td>Disco</td><td>Artista</td><td>Año</td></tr>";

$conexion = sqlite_open('bibliotecacd.db');

//$consulta = "SELECT * FROM Discos WHERE Artista='U2' ORDER BY Anio DESC;";
$consulta = "SELECT * FROM Discos;";

$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['Disco']."</td><td>".$fila['Artista']."</td><td>".$fila['Anio']."</td></tr>";

//echo $fila['Disco']." ".$fila['Artista']." ".$fila['Anio']."<br />";

}

echo "</table>";

sqlite_close($conexion);

?>