<?php

$id=intval($_GET["id"]);

$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM producto where id_producto='$id' ");
$prod = $stmt->fetchObject();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar Producto |Panel de Administracion</title>
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
                     <h2>Editar Producto</h2>                    
                </div>
                <div class="agregar">
                    <form action="update_product.php" method="post">
                        <input type="hidden" name="id" value="<?php echo intval($_GET["id"])?>">
                        <div class="fields">
                            <input id="titulo" name="titleproducto1" type="text" value="<?php echo $prod->nombre ?>" required>
                        </div>
                        <div class="fields">
                            <input id="precio" name="precioproducto1" type="text" value=" <?php echo $prod->precio ?> " required>
                        </div>
                        <div class="fields">
                            <input name="descript1" id="descript" cols="30" rows="10" value="<?php echo $prod->descrip ?>" required maxlength="1000" size="1000">
                        </div>
                        <div class="fields">
                            <input id="stock" name="stock1" type="text" value="<?php echo $prod->stock ?>" required>
                        </div>
                        <div class="fields">
                            <input id="categoria" name="categoria1" type="text" value="<?php echo $prod->categoria ?>" required>
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