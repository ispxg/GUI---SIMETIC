<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel de administración | SIMETIC</title>
    <link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/dropify.css">
    <link rel="stylesheet" type="text/css" href="../Vistas/recursos/css/login.css">
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
             <a href="../Vistas/aperturaraulavirtualesVista.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Aperturar Aulas Virtuales</a><br>
             <a href="parametrosDocControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Matricular Docentes</a><br>
            <a href="parametrosEstControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Matricular Estudiantes</a><br>
            <a href="../Vistas/visualizarBitacoraVista.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Visualizar bitácora</a><br>            
            <a href="reportesControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Generar Reportes</a>

        </div>
        
       
        

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="col-md-12">
                    
                    </div>
                </div>
            </div>

            <hr class="mt-5">

                <div class="row mt-5">
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="text-center">
                  <img src="../Vistas/recursos/img/pdf.jpg"  style="height:90px; width: 100px;">                    </div>
                    <div class="text-center">
                      <p class="mb-0 text-center">Total de Estudiante por pnf</p>
                      <div class="fluid-container">
                      
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                  </p>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                 <button class="btn btn-primary">Generar reporte</button>
                 </div>
                </div> 
              </div>
            </div> 
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="text-center">
                  <img src="../Vistas/recursos/img/pdf.jpg"  style="height:90px; width: 100px;">                    </div>
                    <div class="text-center">
                      <p class="mb-0 text-center">Total de Estudiante por pnf</p>
                      <div class="fluid-container">
                      
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                  </p>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                 <button class="btn btn-primary">Generar reporte</button>
                 </div>
                </div> 
              </div>
            </div> 
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="text-center">
                  <img src="../Vistas/recursos/img/pdf.jpg"  style="height:90px; width: 100px;">                    </div>
                    <div class="text-center">
                      <p class="mb-0 text-center">Total de estudiante por trayecto</p>
                      <div class="fluid-container">
                      
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                  </p>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                 <button class="btn btn-primary">Generar reporte</button>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="text-center">
                  <img src="../Vistas/recursos/img/pdf.jpg"  style="height:90px; width: 100px;">                    </div>
                    <div class="text-center">
                      <p class="mb-0 text-center">Total docente por trayecto</p>
                      <div class="fluid-container">
                      
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    

                  </p>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                 <button class="btn btn-primary">Generar reporte</button>
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
        $(function(){
            var nameImage =  '../Vistas/recursos/img/nube.png';
                $('.dropify').dropify({
                    defaultFile: nameImage ,
                });
        });
    </script>



 





    

</body>
</html>