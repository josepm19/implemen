<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iniciar Sesion | Panedería Nicol</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />

	<link rel="shortcut icon" type="image/x-icon" href="img\ico.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="login">
		<div class="login-box">
			<div class="titulo">
				<h1>Iniciar Sesion</h1>
			</div>
			
			<form action="login_proc.php" method="post">
				<div class="login-form">
					<div class="fila">
							<input  type="text"  value="" placeholder="  Correo" name="correo">
					</div>
					<div class="fila">
							<input type="password"  value="" placeholder="  Contraseña" name="password">
					</div>
					<button class="btn-login" type="submit">Iniciar Sesion</button>
					<!-- <a class="forgotpass" href="#">Perdiste tu contraseña?</a> -->
				</div>
			</form>
		</div>
	</div>

</body>
</html>
