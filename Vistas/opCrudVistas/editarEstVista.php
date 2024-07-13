<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel de administración | SIMETIC</title>
    <link rel="stylesheet" type="text/css" href="../../Vistas/recursos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../Vistas/recursos/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="../../Vistas/recursos/css/dropify.css">
    <link rel="stylesheet" type="text/css" href="../../Vistas/recursos/css/login.css">
</head>
<body>
    
    <header class="mb-5">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#000;">
        <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Mostrar / Ocultar menu</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
          </ul>
          <p id="cs">Cerrar sesión</p>
        </div>
      </nav>
    </header>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color:#fff;">
            <div class="d-flex justify-content-center mt-4">
                <img src="../../Vistas/recursos/img/Logo.jpg" class="img-fluid" id="logoupt">
            </div>
            <p class="text-center mt-2" id="status">Alfredo online</p>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid mt-4">              
                    <h2 class="text-center" id="txt"><a href="../matEstControlador.php"><img src="../../Vistas/recursos/img/volver.png" title="Volver"></a><?php echo "&nbsp"; ?>Editar estudiante </h2>
                    <div class="row">
                        <div class="col-md-12 box">
                            <form action="#" method="post">
                                <div>
                                    <input type="text" name="" required="">
                                    <label>Nombre del estudiante</label>
                                </div>
                                <div>
                                    <input type="text" name="" required="">
                                    <label>Apellido del estudiante</label>
                                </div>
                                <input type="submit" name="" value="Editar"></a>
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
    <script src="../../Vistas/recursos/js/jquery.js"></script>
    <script src="../../Vistas/recursos/js/bootstrap.min.js"></script>
    <script src="../../Vistas/recursos/js/dropify.js"></script>

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