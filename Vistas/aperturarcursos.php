<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Aperturar cursos | SIMETIC</title>
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
        <div id="page-content-wrapper" class="fadeIn animated">
            <div class="container-fluid mt-4">              
      		        <h2 class="text-center" id="txt">Seleccionar parametros - Cursos</h2>
                    <p class="text-center">Según los siguientes parámetros usted gestionará diversos cursos</p>
                    <div class="d-flex justify-content-center">
                        <img src="../Vistas/recursos/img/estudiante.png">
                    </div> 
                    <div class="row">
                        <div class="col-md-12 box">
                            <form action="gestionarcursosVista.php" method="post">
                              <div>
                                    <select class="form-control">
                                        <option selected="" disabled="">Seleccione el PNF</option>
                                        <option value="Administracion">PNF Administración</option>
                                        <option value="Ciencias de la informacion">PNF Ciencias De La Información</option>
                                        <option value="Contaduria publica">PNF Contaduría Pública</option>
                                        <option value="Turismo">PNF Turismo</option>
                                        <option value="Agroalimentacion">PNF Agroalimentación</option>
                                        <option value="Higiene y seguridad laboral">PNF Higiene Y Seguridad Laboral</option>
                                        <option value="Informatica">PNF Informática</option>
                                        <option value="Sistema de calidad y ambiente">PNF Sistema De Calidad Y Ambiente</option>
                                        <option value="Deporte">PNF Deporte</option>
                                    </select>
                                </div>
                                      <div>
                                     <select class="form-control mt-2">
                                        <option selected="" disabled="">Seleccione el lapso</option>
                                        <option value="2">I-2019</option>
                                        <option value="2">II-2019</option>
                                        <option value="2">II-2020</option>
                                        <option value="3">I-2021</option>
                                        <option value="4">II-2021</option>
                                        <option value="4">I-2022</option>
                                        <option value="4">II-2022</option>
                                        <option value="4">I-2023</option>
                                        <option value="4">II-2023</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="form-control mt-2">
                                        <option selected="" disabled="">Seleccione el trayecto</option>
                                        <option value="1">Trayecto 1</option>
                                        <option value="2">Trayecto 2</option>
                                        <option value="3">Trayecto 3</option>
                                        <option value="4">Trayecto 4</option>
                                    </select>
                                </div>
                                        <div>
                                    <select class="form-control mt-2">
                                        <option selected="" disabled="">Seleccione la fase</option>
                                        <option value="1">Fase 1</option>
                                        <option value="2">Fase 2</option>
                                    </select>
                                </div>
                             
                                
                                
                              
                                <input type="submit" name="" class="mt-2" value="Comenzar gestion de cursos">
                            </form>
                        </div>
                    </div>
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