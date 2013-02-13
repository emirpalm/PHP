<?php

//Establecemos la conexion

$conexion = sqlite_open('bibliotecacd.db');


//Abrimos una tabla

echo "<table border=1><tr><td>Disco</td><td>Artista</td><td>Año</td></tr>";

//Populamos la base de datos a una tabla, como formularios

$consulta = "SELECT * FROM Discos;";

$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['Disco']."</td><td>".$fila['Artista']."</td><td>".$fila['Anio']."</td><td><a href='aplicacionmodificar.php?disco=".$fila['Disco']."&artista=".$fila['Artista']."&anio=".$fila['Anio']."'>Modificar</a></td><td><a href='aplicacioneliminar.php?disco=".$fila['Disco']."&artista=".$fila['Artista']."&anio=".$fila['Anio']."'>Eliminar</a></tr>";


}
//Añadir un registro
echo "<tr><form action='aplicacionadd.php' method='POST'><td><input type='text' name='Disco'></td><td><input type='text' name='Artista'></td><td><input type='text' name='Anio'></td><td><input type='submit'></td></form></tr>";

echo "</table>";

//Permitimos añadir un registro mas

echo "</form></table>";

//Cerramos la base de datos

sqlite_close($conexion);

?>
