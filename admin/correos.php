<?php

$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM contacto");
$contacto = $stmt->fetchAll();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Datos de Contacto | Panel de Administracion</title>
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
                     <h2>Correos de Contactos</h2> 
                </div>
                
                <table>
                    <tr>
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CORREO</th>
                        <th>TELEFONO</th>
                        <th>#PEDIDO</th>
                        <th>ASUNTO</th>
                        <th>MENSAJE</th>
                        <th>ACCION</th>
                    </tr>
                    <?php if (count($contacto) == 0) { ?>
                    <tr>
                        <td colspan="9" style="text-align: center"> Aún ningún cliente se ha contactado</td>
                    </tr>
                    <?php } ?>

                    <?php foreach ($contacto as $c) { ?>
                    <tr>
                        <td><?php echo $c["id_contacto"] ?></td>
                        <td><?php echo $c["nombre"] ?></td>
                        <td><?php echo $c["apellido"] ?></td>
                        <td><?php echo $c["email"] ?></td>
                        <td><?php echo $c["telefono"] ?></td>
                        <td><?php echo $c["numpedido"] ?></td>
                        <td><?php echo $c["motivo"] ?></td>
                        <td><?php echo $c["mensaje"] ?></td>

                        <td style="text-align: center">            
                            <form class="edit" action="borrar_correo.php" method="POST">
                                <input type="hidden" name="idc" value="<?php echo $c["id_contacto"] ?>">
                                <button type="submit"><i class="fas fa-trash-alt" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
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