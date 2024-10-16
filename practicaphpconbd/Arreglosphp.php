<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cars = array("Volvo", "BMW", "Toyota");
//var_dump($cars);
/*
$a = count($cars);
echo "$a";
for($i=0;$i < $a; $i++){
echo "$cars[$i] <br>";
}
*/
//uso foreach
foreach ($cars as $x) {
    echo "$x <br>";
  }
?>
</body>
</html>