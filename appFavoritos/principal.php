<?php

session_start();
//Establecemos la conexion

$conexion = sqlite_open('favoritos.db');


//Abrimos una tabla

echo "<table border=1><tr><td>Titulo</td><td>Direccion</td><td>Categoría</td><td>Comentario</td><td>Valoración</td></tr>";

//Populamos la base de datos a una tabla

$consulta = "SELECT * FROM favoritos WHERE usuario='".$_SESSION['usuario']."' AND contrasena='".$_SESSION['contrasena']."' ;";

$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td><td><a href='actualizar.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>Modificar</a></td><td><a href='quitar.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>Eliminar</a></tr>";


}
//Añadir un registro
echo "<tr><form action='escribir.php' method='POST'><td><input type='text' name='titulo'></td><td><input type='text' name='direccion'></td><td><select name='categoria'>
  <option value='salud'>Salud</option>
  <option value='trabajo'>Trabajo</option>
  <option value='hobby'>Hobby</option>
  <option value='personal'>Personal</option>
  <option value='otros'>Otros</option>
</select></td><td><input type='text' name='comentario'></td><td><input type='text' name='valoracion'></td><td><input type='submit'></td></form></tr>";

echo "</table>";

//Permitimos añadir un registro mas

echo "</form></table>";

//Cerramos la base de datos

sqlite_close($conexion);

?>
