<?php
# Entrada
$titulo = $_POST["titleproducto"];
$precio = $_POST["precioproducto"];
$descrip = $_POST["descript"];
$stock = $_POST["stock"];
# Proceso
$cnn=oci_connect('SYSTEM','153426','localhost/XE');
$sql=oci_parse($cnn,"INSERT INTO * PRODUCTO VALUES (NULL, '$titulo', '$precio','$descrip','$stock')");
oci_execute($sql);
echo 'creado';
# Salida
header('Location: productos.php');
?>