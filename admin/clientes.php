<?php
$cnn=oci_connect('panaderia_nikol','153426','localhost/XE');
$sql=oci_parse($cnn,'SELECT * FROM PERSONA');
oci_execute($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clientes | Panel de Administracion</title>
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
                     <h2>Clientes</h2> 
                </div>
                
                <table>
                    <tr>
                        <th>DNI</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>F NACIMIENTO</th>
                        <th>SEXO</th>
                        <th>CELULAR</th>
                        <th>CORREO</th>
                        <th>DIRECCION</th>
                        <th>ACCION</th>
                    </tr>
                    <?php while(($scar=oci_fetch_assoc($sql))!=false){ ?>
                    <tr>
                        <td><?php echo  $scar['DNI']?></td>
                        <td><?php echo  $scar['NOMBRE']?></td>
                        <td><?php echo  $scar['APELLIDO_PATERNO']?></td>
                        <td><?php echo  $scar['APELLIDO_MATERNO']?></td>
                        <td><?php echo  $scar['F_NACIMIENTO']?></td>
                        <td><?php echo  $scar['SEXO']?></td>
                        <td><?php echo  $scar['CELULAR']?></td>
                        <td><?php echo  $scar['CORREO']?></td>
                        <td><?php echo  $scar['DIRECCION']?></td>
                        <td style="text-align: center">            
                            <form class="edit" action="borrar_cliente.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $cli["id_cliente"] ?>">
                                <button type="submit"><i class="fas fa-trash-alt" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
                            </form> 
                            <form class="edit" action="editar_cliente.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $cli["id_cliente"] ?>">
                                <button type="submit"><i class="fas fa-edit" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
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