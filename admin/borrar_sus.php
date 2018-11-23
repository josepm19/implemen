<?php
# Entrada
$ids = $_POST["ids"];

# Proceso
$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$db->query("DELETE FROM suscriptor WHERE id_suscriptor = '$ids'");

# Salida
header('Location: suscriptores.php');
?>