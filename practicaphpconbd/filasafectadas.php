<?php
$mysqli = new mysqli("localhost","root","","test");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform queries and print out affected rows
$mysqli -> query("SELECT * FROM alumno");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> query("DELETE FROM alumno WHERE edad>16");
echo "Affected rows: " . $mysqli -> affected_rows;

$mysqli -> close();
?>