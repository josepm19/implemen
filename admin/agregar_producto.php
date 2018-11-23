<?php


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agregar Producto |Panel de Administracion</title>
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
                     <h2>Agregar Producto</h2>                    
                </div>
                <div class="agregar">
                    <form action="proc_agregar_prod.php" method="post">
                        <div class="fields">
                            <input id="nombreprod" name="titleproducto" type="text" placeholder="Nombre del producto" required>
                        </div>
                        <div class="fields">
                            <input id="precio" name="precioproducto" type="text" placeholder=" S/. " required>
                        </div>
                        <div class="fields">
                            <textarea name="descript" id="descript" cols="30" rows="10" placeholder="Descripcion" required></textarea>
                        </div>
                        <div class="fields">
                            <input id="stock" name="stock" type="text" placeholder="Stock" required>
                        </div>
                        <div>
                            <button type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>