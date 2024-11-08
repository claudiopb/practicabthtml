<?php
$mysqli = new mysqli("localhost","root","","test");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM alumno";
/*
if ($result = $mysqli -> query($sql)) {
  $row = $result -> fetch_row();
    print "$row[0]" ."  ". "$row[1] "."  ". "$row[3] <br>";

    $row = $result -> fetch_row();
    print "$row[0]" ."  ". "$row[1] "." ". "$row[3] <br>";
  
    
    $row = $result -> fetch_row();
    print "$row[0]" ."  ". "$row[1] "." ". "$row[3] <br>";
*/
  
if ($result = $mysqli -> query($sql)) {
   while($row = $result -> fetch_row()){
      print "$row[0]" ."  ". "$row[1] "."  ". "$row[3] <br>";
   } 
   
   
  }
  
$result -> free_result();
  


$mysqli -> close();
?>