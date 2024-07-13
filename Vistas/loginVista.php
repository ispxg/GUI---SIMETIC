<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login | SIMETIC</title>
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/login.css">
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/animate.css">
</head>
<body>

	<div class="container mt-5" id="container-main">
		<h1 class="text-center fadeIn animated">Sistema de matriculación SIMETIC</h1>

		<div class="row mt-5">
			<div class="col-md-6">
				<img src="../Vistas/recursos/img/Logo.jpg" class="img-fluid fadeIn animated">
			</div>
			<div class="col-md-6 box">
				<form action="padminControlador.php" class="" method="post">
					<div>
						<input type="text" name="" required="">
						<label>Usuario</label>
					</div>
					<div>
						<input type="password" name="" required="">
						<label>Contraseña</label>
					</div>
					<input type="submit" name="" value="Iniciar sesión"></a>
					<p class="text-center"><a href="recuperarDatosControlador.php">He olvidado mis datos</a></p>
					<p class="text-center"><a href="registroControlador.php">No tengo usuario ni contraseña, quisiera registrarme</a></p>
				</form>
			</div>
		</div>
	</div>

	
	

	<script src="../Vistas/recursos/js/jquery.js"></script>
	<script src="../Vistas/recursos/js/bootstrap.min.js"></script>

</body>
</html>