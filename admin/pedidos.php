<?php

$cnn=oci_connect('panaderia_nikol','153426','localhost/XE');
$sql=oci_parse($cnn,'SELECT * FROM PRODUCTO');
oci_execute($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pedidos | Panel de Administracion</title>
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
                     <h2>Pedidos</h2> 
                </div>
                
                <table>
                    <tr>
                        <th>#</th>
                        <th>CLIENTE</th>
                        <th>ESTADO</th>
                        <th>FECHA</th>
                        <th>T ENVIO</th>
                        <th>FPAGO</th>
                        <th>ACCIONES</th>

                    </tr>
                    <?php if (count($ped) == 0) { ?>
                    <tr>
                        <td colspan="6" style="text-align: center"> No se encontraron productos</td>
                    </tr>
                    <?php } ?>

                    <?php foreach ($ped as $pedi) { ?>
                    <tr>
                        <td><?php echo $pedi["id_producto"] ?></td>
                        <td><?php echo $pedi["nombre"] ?></td>
                        <td><?php echo $pedi["estado"] ?></td>
                        <td><?php echo $pedi["fecha"] ?></td>
                        <td><?php echo $pedi["tip_envio"] ?></td>
                        <td><?php echo $pedi["forma_pago"] ?></td>
                        <td style="text-align: center">            
                            <form class="edit" action="borrar_usuario.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $u["id"] ?>">
                                <button type="submit"><i class="fas fa-trash-alt" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
                            </form> 
                            <form class="edit" action="editar_usuario.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $u["id"] ?>">
                                <button type="submit"><i class="fas fa-edit" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
                            </form>  
                            <form class="edit" action="editar_password.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $u["id"] ?>">
                                <button type="submit"> <i class="fas fa-user-edit" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
                            </form>         
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        
    </div>
</body>
</html>