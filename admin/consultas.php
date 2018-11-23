<?php


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    	<link rel="shortcut icon" type="image/x-icon" href="../img\ico.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Suscriptores |Panel de Administracion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../img\ico.png" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.scss" />
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">

</head>
<body>
    <div class="todo">
        <?php include 'partes/cab.php'?>
        <div class="bloque-cuerpo">
                    <?php include 'partes/side.php'?>
            <div class="content">
                <div class="nombre-tabla">
                     <h2>Consultas</h2> 
                     
                </div>
                <div>

                  <input type="text" name="idproducto" placeholder="Escriba el ID del producto"> <br> <br>
                </div>


                <?php
                $cnn=oci_connect('SYSTEM','153426','localhost/XE');
                $sql=oci_parse($cnn,'SELECT * FROM PRODUCTO');
                $stid = oci_parse($cnn, 'begin VER_CLIENTENATURAL; end;');
                oci_execute($stid);

                oci_free_statement($stid);
                oci_close($cnn);
               ?>
                
            </div>
        </div>
    </div>
</body>
</html>