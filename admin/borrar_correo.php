<?php
# Entrada
$idc = $_POST["idc"];

# Proceso
$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$db->query("DELETE FROM contacto WHERE id_contacto = '$idc'");

# Salida
header('Location: correos.php');
?>