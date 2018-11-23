<?php
# Entrada
$id=$_POST["id"];
$titulo1 = $_POST["titleproducto1"];
$precio1 = $_POST["precioproducto1"];
$descrip1 = $_POST["descript1"];
$stock1 = $_POST["stock1"];
$categoria1 = $_POST["categoria1"];

# Proceso
$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$db->query("UPDATE producto SET nombre='$titulo1', precio='$precio1',descrip='$descrip1',stock='$stock1',categoria='$categoria1' WHERE id_producto='$id'");

# Salida
header('Location: productos.php');
?>