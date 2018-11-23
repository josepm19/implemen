<?php


$cnn=oci_connect('SYSTEM','153426','localhost/XE');
$sql=oci_parse($cnn,'SELECT * FROM PRODUCTO');
oci_execute($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Productos|Panel de Administracion</title>
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
                     <h2>Lista de Productos</h2>
                                         
                     <a id="añadir_producto" href="agregar_producto.php"><i class="fas fa-plus"></i> Añadir Producto</a>                     
                </div>
                    
                
                        <table>
                        <tr>
                            <th>#</th>
                            <th>NOMBRE PRODUCTO</th>
                            <th>PRECIO</th>
                            <th>DESCRIPCION</th>
                            <th>STOCK</th>
                            <th>ACCION</th>
                        </tr>
                        <?php if (count($sql) == 0) { ?>
                        <tr>
                        <td colspan="5" style="text-align: center"> No se encontraron registros</td>
                    </tr>
                    <?php } ?>
                       <?php while(($scar=oci_fetch_assoc($sql))!=false){ ?>
                            
                        <tr>
                            <td><?php echo  $scar['ID_PRODUCTO']?></td>
                            <td><?php echo  $scar['NOMBRE_PRODUCTO']?></td>
                            <td><?php echo  $scar['PRECIO']?></td>
                            <td><?php echo  $scar['DESCRIPCION']?></td>                            
                            <td><?php echo  $scar['STOCK']?></td>
                             <td style="text-align: center">            
                            <form class="edit" action="borrar_producto.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo  $scar['ID_PRODUCTO']?>">
                                <button type="submit"><i class="fas fa-trash-alt" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
                            </form> 
                            <form class="edit" action="editar_producto.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo  $scar['ID_PRODUCTO']?>">
                                <button type="submit"><i class="fas fa-edit" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
                            </form>  
                                  
                        </td>
                        </tr>
                       <?php }?>
                        </table>
            </div>
        </div>
        
    </div>
</body>
</html>