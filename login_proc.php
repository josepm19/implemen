<?php
#entrada
$correo=$_POST["correo"];
$password=$_POST["password"];



#proceso
$cnn=oci_connect('panaderia_nikol','153426','localhost/XE');
$sql=oci_parse($cnn,"SELECT * FROM USUARIOS WHERE CORREO='$correo' AND PASSWORD='$password'");
oci_execute($sql);
/*print_r($usuarios);
die();*/
$validacion = false;
while(($scar=oci_fetch_assoc($sql))!=false){
    if (count($sql) == 1) {
        # Datos correctos
        $validacion = true;
        $id=$scar['ID_USER'];
        $email=$scar['CORREO'];
    }
} 


# Salida
if ($validacion) {
    header('Location: admin/index.php');
}
else {
    header('Location: login.php?error=1');
}
?>