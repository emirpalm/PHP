<?php

$conexion = sqlite_open('bibliotecacd.db');

$consulta =

<<<SQL

INSERT INTO Discos VALUES ('Queeen','Queen',1973);
INSERT INTO Discos VALUES ('Queeen','QueenII',1974);
INSERT INTO Discos VALUES ('Queeen','Sheer Heart Attack',1974);
INSERT INTO Discos VALUES ('Queeen','A Night At The Opera',1975);
INSERT INTO Discos VALUES ('U2','Boy',1980);
INSERT INTO Discos VALUES ('U2','October',1981);
INSERT INTO Discos VALUES ('U2','War',1983);
INSERT INTO Discos VALUES ('U2','Under a Blood Red Sky',1983);

SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);

?>