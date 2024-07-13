<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Recuperar Apodo | SIMETIC</title>
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/login.css">
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/animate.css">
</head>
<body>

	<div class="container mt-5" id="container-main">
		<h1 class="text-center fadeIn animated">Recuperar datos</h1>

		<div class="row mt-5">
			<div class="col-md-6">
				<img src="../Vistas/recursos/img/Logo.jpg" class="img-fluid fadeIn animated">
			</div>
			<div class="col-md-6 box">
				<form method="post">
					<p>Buscaremos tu apodo en caso si existe lo restableceremos</p>
					<hr>
					<div>
						<input type="text" name="" id="apodo" required="">
						<label>Apodo</label>
					</div>
					<a href="../Vistas/reestablecerDatosVista.php"><input type="button" name="recuperarDatos" value="Buscar apodo" id="recuperarapodo" class="botonAzul"></a>
					<p class="text-center"><a href="loginControlador.php">Regresar para iniciar sesión</a></p>
				</form>
			</div>
		</div>
	</div>

	
		
	
	<script src="../Vistas/recursos/js/jquery.js"></script>
	<script src="../Vistas/recursos/js/bootstrap.min.js"></script>
	<script src="../Vistas/recursos/js/sweetalert.js"></script>
	<script src="../Vistas/recursos/js/jvalidator.js"></script>

	<script>
		

		$(function(){
			$('#recuperarDatos').click(function(){
				var parametro = {
					'email' : $('#email').val()
				};

				console.log(parametro);
				$.ajax({
					data : parametro,
					url : 'recuperarDatosControlador.php',
					type : 'post',
					success : function(response){
						swal(response, "Por favor verifique su correo", "success");
						$('.swal-button').css('background-color','#1565C0');
					}
				});
			});
		});
	</script>

</body>
</html>