<?php
$mysqli = new mysqli("localhost","root","","test");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM alumno";
/*
$sql = "SELECT apellido, edad FROM alumno ORDER BY apellido";
$result = $mysqli -> query($sql);

// Numeric array
$row = $result -> fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);

// Associative array
$row = $result -> fetch_array(MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["apellido"], $row["edad"]);
*/

/*
Para imprimir todas las filas de la tabla usando el ciclo foreach, necesitas hacer un pequeño
 cambio en la lógica del código. En lugar de usar fetch_row(), que devuelve una sola fila, 
 puedes utilizar fetch_all() para obtener todas las filas al mismo tiempo como un arreglo de
  arreglos. Luego, puedes iterar sobre todas las filas usando foreach.
*/

/*
if ($result = $mysqli->query($sql)) {
    // Obtener todas las filas como un array de arrays
    $rows = $result->fetch_all(MYSQLI_NUM); // MYSQLI_NUM devuelve cada fila como un array numérico

    // Recorrer cada fila usando foreach
    foreach ($rows as $colum) {
        echo $colum[0] . "  " . $colum[1] . "  " . $colum[3] . "<br>";
    }
    
    // Liberar el conjunto de resultados
    $result->free_result();
}

$mysqli->close();*/
/*?>



Explicación de los cambios:
fetch_all(MYSQLI_NUM): Utilizamos fetch_all() con el modo MYSQLI_NUM para obtener todas las filas en un
array de arrays, donde cada fila es un array numérico.

foreach ($rows as $row): Con foreach, recorremos cada fila ($row) obtenida en el array $rows.

Acceso a los elementos de cada fila: Para cada $row, puedes acceder a los elementos específicos
($row[0], $row[1], y $row[3]) y luego imprimirlos.

Esto imprimirá todas las filas de la tabla, mostrando los valores de las columnas especificadas en cada iteración.

Si deseas recorrer cada fila y luego, dentro de esa fila, recorrer cada columna usando foreach, puedes hacerlo
de la siguiente manera:

Primero, obtenemos todas las filas de la base de datos.
Luego, usamos un foreach externo para recorrer cada fila.
Dentro de cada fila, usamos otro foreach interno para recorrer cada columna y así imprimir su contenido.

*/



if ($result = $mysqli->query($sql)) {
    // Obtener todas las filas como un array de arrays
    $rows = $result->fetch_all(MYSQLI_NUM); // MYSQLI_NUM para un array numérico

    // Recorrer cada fila
    foreach ($rows as $row) {
        // Recorrer cada columna de la fila
        foreach ($row as $column) {
            echo $column . " ";
        }
        echo "<br>"; // Salto de línea después de cada fila
    }
    
    // Liberar el conjunto de resultados
    $result->free_result();
}

$mysqli->close();
/*?>*/


/*
Explicación del Código
fetch_all(MYSQLI_NUM): Este método obtiene todas las filas en un solo arreglo, con cada
 fila siendo un arreglo numérico de sus columnas.

foreach ($rows as $row): El primer foreach recorre cada fila de la tabla. Cada $row es 
un arreglo que contiene todas las columnas de esa fila.

foreach ($row as $column): El segundo foreach recorre cada columna dentro de la fila actual y la imprime.

echo "<br>";: Después de imprimir todas las columnas de una fila, se inserta un salto 
de línea (<br>) para que cada fila aparezca en una nueva línea en la salida.

Este enfoque imprime todo el contenido de la tabla, fila por fila y columna por columna.
*/

?>