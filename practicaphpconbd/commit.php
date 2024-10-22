<?php
$mysqli = new mysqli("localhost","root","","test");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Turn autocommit off
$mysqli -> autocommit(FALSE);

// Insert some values
$mysqli -> query("INSERT INTO alumno (nombre,apellido,edad,carrera)
VALUES ('Claudio','Peña',47,'Programacion')");
$mysqli -> query("INSERT INTO alumno (nombre,apellido,edad,carrera)
VALUES ('Darinel','Ortega',17,'Programacion')");

// Commit transaction
if (!$mysqli -> commit()) {
  echo "Commit transaction failed";
  exit();
}

$mysqli -> close();
?>