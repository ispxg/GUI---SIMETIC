<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registrar usuario | SIMETIC</title>
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/login.css">
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/animate.css">
</head>
<body>

	<div class="container mt-5" id="container-main">
		<h1 class="text-center fadeIn animated">Registrar usuario</h1>
		<div class="row mt-5">
			<div class="col-md-6">
				<img src="../Vistas/recursos/img/Logo.jpg" class="img-fluid fadeIn animated">
			</div>
			<div class="col-md-6 box">
				<form method="post">
					<div>
						<input type="text" name="" id="usuario" required="">
						<label>Usuario</label>
					</div>
					<div>
						<input type="text" name="" id="contra" required="">
						<label>Contraseña</label>
					</div>
					<div>
						<input type="text" name="" id="email" required="">
						<label>Apodo</label>
					</div>
					<div>
						<select class="form-control mb-4" id="rol">
							<option disabled selected="">Rol dentro de EMLTIC</option>
							<option value="jefe de dpto">Jefe de dpto.</option>
							<option value="administrador de dpto">Coordinador de dpto.</option>
						</select>
					</div>
					<input type="submit" name="recuperarDatos" value="Registrarme" id="recuperarDatos" class="botonAzul">
					<p class="text-center"><a href="loginControlador.php">Regresar para iniciar sesión</a></p>
				</form>
			</div>
		</div>
	</div>

	
		
	

	<script src="../Vistas/recursos/js/jquery.js"></script>
	<script src="../Vistas/recursos/js/bootstrap.min.js"></script>
	<script src="../Vistas/recursos/js/sweetalert.js"></script>

	<script>
		
	</script>

</body>
</html>