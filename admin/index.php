<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Panel de Administracion</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img\ico.png" />    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.scss" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/search.scss" />
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <script src="js/search.js"></script>

    

</head>
<body>
    <div class="todo">
        <?php include 'partes/cab.php'?>
        <div class="bloque-cuerpo">
                    <?php include 'partes/side.php'?>
            <div class="content">
                    <div class="center-on-page">
                        <h1>Operaciones</h1>
                        <div class="select">
                            <select name="slct" id="slct" onchange="location = this.options[this.selectedIndex].value;">
                                <option>Escoja una operación</option>
                                <option value="consultas.php">Consultas</option>
                                <option value="operaciones.php">Operaciones</option>
                            </select>
                        </div>
                    </div>

                <p>Estadísticas hasta hoy día </p>
                <div class="cant_product">
                        Cantidad de productos:
                        
                        <?php 
                        $con=oci_connect('panaderia_nikol','153426','localhost/XE');
                            $sql='SELECT ID_PRODUCTO FROM PRODUCTO';
                            $stid=oci_result($con,$sql);
                            oci_execute($stid);

                        while (oci_fetch($stid)) {
                                echo oci_result($stid);
                        }
                        ?>
                </div>
                <div class="cant_pedidos">
                        Cantidad de pedidos: 15
                </div>
                <div class="cant_clientes">
                        Cantidad de clientes: 15
                </div>
                
                
            </div>
        </div>
        
    </div>
</body>
</html>