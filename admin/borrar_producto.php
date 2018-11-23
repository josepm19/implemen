<?php
# Entrada
$id = $_POST["id"];

# Proceso
$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$db->query("DELETE FROM producto WHERE id_producto = '$id'");

# Salida
header('Location: productos.php');
?>