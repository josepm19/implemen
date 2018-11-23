

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
<?php

$conn = oci_connect('panaderia_nikol', '153426', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM empleado');
oci_execute($stid);

$nrows = oci_fetch_all($stid, $res);

echo "$nrows filas obtenidas<br>\n";
var_dump($res);

// la salida de var_dump es:
//    2 filas obtenidas
//    array(2) {
//      ["POSTAL_CODE"]=>
//      array(2) {
//        [0]=>
//        string(6) "00989x"
//        [1]=>
//        string(6) "10934x"
//      }
//      ["CITY"]=>
//      array(2) {
//        [0]=>
//        string(4) "Roma"
//        [1]=>
//        string(6) "Venice"
//      }
//    }

// Imprimir los resultados de forma legible
echo "<table border='1'>\n";
foreach ($res as $col) {
    echo "<tr>\n";
    foreach ($col as $item) {
        echo "    <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "")."</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

oci_free_statement($stid);
oci_close($conn);

?>
</body>
</html>