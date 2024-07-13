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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
           <div class="text-center">
               <h3> Asignar un aula virtual</h3>
           </div>
          
          </div>
          <div class="modal-body" id="mb">
            <div class="row">
                <p> Por favor escoja el aula en la que se matricularan a los docentes.</p>
                <div class="col-md-8">
                   <div class="row">
                       <div class="col-md-6">
                           <p class="text-center"><b>Nombre</b></p>
                           <input type="checkbox" name=""> Tania Segnini<br><br>
                           <hr>
                           <input type="checkbox" name=""> Angelismar Teran<br>
                       </div>
                       <div class="col-md-6">
                           <p class="text-center"><b>Especialidad</b></p>
                           <p>Modelado de base de datos</p>
                           <hr>
                           <p>Ingenieria del Software</p>
                       </div>
                   </div>
                </div>
                <div class="col-md-4">
                    <p class="text-center"><b>Aulas disponibles</b></p>
                    <input type="checkbox" name=""> IN3121</p>
                    <input type="checkbox" name=""> IN3122</p>
                    <input type="checkbox" name=""> IN3123</p>
                </div>   
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Crear aula virtual</button>
            <a href="../Vistas/vistaPreviaDocVista.php"><button type="button" class="btn btn-primary">Vista previa</button></a>
          </div>
        </div>
      </div>
    </div>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color:#fff;">
            <div class="d-flex justify-content-center mt-4">
                <img src="../Vistas/recursos/img/Logo.jpg" class="img-fluid" id="logoupt">
            </div>
            <p class="text-center mt-2" id="status" style="color:#00C707;"> Alfredo<br>status:online <img src="../Vistas/recursos/img/online.png"></p>
            <a href="../Vistas/orgDocenteVista.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Organizacion docente</a><br>
             <a href="../Vistas/aperturaraulavirtualesVista.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Aperturar Aulas Virtuales</a><br>
             <a href="parametrosDocControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Matricular Docentes</a><br>
            <a href="parametrosEstControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Matricular Estudiantes</a><br>
            <a href="../Vistas/visualizarBitacoraVista.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Visualizar bitácora</a><br>            
            <a href="reportesControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Generar Reportes</a>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="fadeIn animated">
            <div class="container-fluid mt-4">
                <h2 class="text-center" id="txt">Matricular Docentes</h2>
            </div>

            <div class="d-flex justify-content-center">
                 <input type="submit" name="" id="sa" class="btn btn-primary" value="Asignar aula virtual" data-toggle="modal" data-target="#exampleModal">
            </div>
            

            <hr class="mt-5">

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
        $(function(){
            var nameImage =  '../Vistas/recursos/img/nube.png';
                $('.dropify').dropify({
                    defaultFile: nameImage ,
                });
        });
    </script>

    <script >
        $(function(){
            $('#formularioCSV').click(function(event){
                event.preventDefault();
            });
        }); 
    </script>



    

</body>
</html>