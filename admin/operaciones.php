<?php


$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM suscriptor");
$suscriptores = $stmt->fetchAll();
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
                     <h2>Lista de Operaciones</h2> 
                     
                </div>
                
                <table>
                    <tr>
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>CORREO</th>
                        <th>ACCIONES</th>
                    </tr>
                    <?php if (count($suscriptores) == 0) { ?>
                    <tr>
                        <td colspan="5" style="text-align: center"> No se encontraron registros</td>
                    </tr>
                    <?php } ?>

                    <?php foreach ($suscriptores as $s) { ?>
                    <tr>
                        <td><?php echo $s["id_suscriptor"] ?></td>
                        <td><?php echo $s["nombre"] ?></td>
                        <td><?php echo $s["email"] ?></td>
                        <td style="text-align: center">            
                            <form class="edit" action="borrar_sus.php" method="POST">
                                <input type="hidden" name="ids" value="<?php echo $s["id_suscriptor"] ?>">
                                <button type="submit"><i class="fas fa-trash-alt" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
                            </form> 
                            <form class="edit" action="editar_usuario.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $s["id_suscriptor"] ?>">
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