<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Consultar Curso | SIMETIC</title>
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
            <a href="aperturaraulavirtualesVista.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Aperturar Aulas Virtuales</a>
            <br>
            <a href="../Controladores/parametrosDocControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Matricular Docentes</a><br>
            <a href="../Controladores/parametrosEstControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Matricular Estudiantes</a><br>
            <a href="../Vistas/visualizarBitacoraVista.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Visualizar bitácora</a><br>
            <a href="../Controladores/reportesControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Generar Reportes</a>
        </div>
        
       
 <div class="container">
     <h1 class="text-center">Consultar curso</h1>
  <form>
    <div class="form-group">
        <input type="text" name="" placeholder="Ingrese el dato a Consultar" class="form-control">
    </div>
    <div class="d-flex justify-content-center">
        <input type="submit" name="" value="Consultar" class="btn btn-primary">
    </div>
  </form>
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