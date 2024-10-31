<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
/*
function myMessage() {
    echo "Hello world! <br>";
  }
  
  myMessage();
  myMessage();
  myMessage();
  myMessage();
  myMessage();

  function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Claudio");
  familyName("CRistian");
  familyName("Brisia");
  familyName("Nancy");
  familyName("Nimbe");  

  function add_five(&$value) {
    $value += 5;
  }
  
  $num = 10;
  add_five($num);
  echo $num;

function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
*/
function sumMyNumbers(...$x) {
  $suma = 0;
  $len = count($x);
  foreach ($x as $num) {
    $suma += $num;
  }
  
  return $suma;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo "la suma es: $a";

?>


</body>
</html>