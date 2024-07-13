<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Panel de administración | SIMETIC</title>
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/dropify.css">
	<link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/login.css">
    <link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/animate.css">
</head>
<body>
	
	<header class="mb-5">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#000;">
        <a href="#menu-toggle" class="btn btn-primary botonAzul" id="menu-toggle">Mostrar / Ocultar menu</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
          </ul>
          <a href="loginControlador.php" id="cs"><img src="../Vistas/recursos/img/logout.png"> Cerrar sesión</a>
        </div>
      </nav>
    </header>

	<div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color:#fff;">
            <div class="d-flex justify-content-center mt-4">
                <img src="../Vistas/recursos/img/Logo.jpg" class="img-fluid" id="logoupt">
            </div>
            <p class="text-center mt-2" id="status" style="color:#00C707;"> Alfredo<br>status:online <img src="../Vistas/recursos/img/online.png"></p>
            <a href="../Vistas/orgDocenteVista.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Organizacion docente</a><br>
            <a href="aperturaraulavirtualesVista.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Aperturar Aulas Virtuales</a>
            <br>
            <a href="../Controladores/parametrosDocControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Matricular Docentes</a><br>
            <a href="../Controladores/parametrosEstControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Matricular Estudiantes</a><br>
            <a href="../Vistas/visualizarBitacoraVista.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Visualizar bitácora</a><br>
            <a href="../Controladores/reportesControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Generar Reportes</a>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid mt-4">
                
                
                		<h2 class="text-center fadeIn animated" id="txt">Completar organización docente</h2>

                        <form action="orgDocenteVista.php">
                            <div class="form-group">
                                <select class="form-control" id="sespecialidad">
                                    <option select>Seleccionar especialidad</option>
                                    <option value="PNFA">PNFA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                <option select>Seleccionar trayecto</option>
                                <option value="PNFA">1</option>
                                <option value="PNFA">2</option>
                                <option value="PNFA">3</option>
                                <option value="PNFA">4</option>
                            </select>
                            </div>
                           <div class="form-group">
                                <select class="form-control">
                                <option select>Seleccionar fase</option>
                                <option value="PNFA">1</option>
                                <option value="PNFA">2</option>
                            </select>
                           </div>
                            <div class="form-group">
                                <select class="form-control">
                                <option select>Seleccionar unidad curricular</option>
                                <option value="PNFA">Declaración de rentas</option>
                            </select>
                            </div>
                           <div class="form-group">
                                <select class="form-control">
                                <option select>Seleccionar sección</option>
                                <option value="PNFA">LAD3410</option>
                            </select>
                           </div>
                            <div class="form-group">
                                <input type="text" name="pnombredoc" placeholder="Ingrese su primer nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="snombredoc" placeholder="Ingrese su segundo nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="papellidodoc" placeholder="Ingrese su primer apellido" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="sapellidodoc" placeholder="Ingrese su segundo apellido"  class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="cidoc" placeholder="Ingrese su cedula"  class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" name="emaildoc" placeholder="Ingrese su email"  class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" name="telefonodoc" placeholder="Ingrese su telefono"  class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nombreeva" placeholder="Ingrese el nombre del eva"  class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="tipoaula" placeholder="Ingrese el tipo de aula"  class="form-control">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option selected="" disabled="">¿Docente formado en EaD?</option>
                                    <option>Sí</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" name="sod" value="Finalizar org. docente" class="btn btn-primary">
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="../Vistas/recursos/js/jquery.js"></script>
	<script src="../Vistas/recursos/js/bootstrap.min.js"></script>
	<script src="../Vistas/recursos/js/dropify.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <script>
    	$('.dropify').dropify();
    </script>



	

</body>
</html>