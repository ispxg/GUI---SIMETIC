<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestionar categorias | SIMETIC</title>
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
            <a href="../Controladores/reportesControlador.php" class="ml-3"><img src="../Vistas/recursos/img/flecha.png"> Generar Reportes</a>
        </div>
        <!-- /#sidebar-wrapper -->

       
            <hr class="mt-5">
             <div class="d-flex justify-content-center" style="margin:auto;">
                 <div class="row mt-5">
                    <div class="col-md-8 mt-2">
                       <div class="text-center">
                            <h2>Gestionar - Categorias</h2>
                       </div>
                        <table class="table table-hover table-responsive ">
                            <thead id="thead" id="tableColor">
                                <tr>
                                    <td class="text-center">ID</td>
                                    <td class="text-center">NOMBRE DE LA CATEGORIA</td>
                            
                                    <td class="text-center">ID CATEGORIA</td>
                                     <td class="text-center">DESCRIPCION</td>
                                    <td class="text-center">ACCIONES</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">SECCION IN3121</td>
                                    <td class="text-center">3</td>
                                    
                                    <td class="text-center">Aqui se almacera todos los cursos de la seccion IN3121</td>
                                   
                                    <td class="text-center">
                                        <a href="modificarcategoriasVista.php"><img src="../Vistas/recursos/img/editar.png"></a>
                                         <a href="consultarcategoriasVista.php"><img src="../Vistas/recursos/img/consultar.png"></a>     
                                    </td>
                                </tr>
                                <tr>
                                   <td class="text-center">1</td>
                                    <td class="text-center">SECCION IN3121</td>
                                    <td class="text-center">3</td>
                                    
                                    <td class="text-center">Aqui se almacera todos los cursos de la seccion IN3121</td>

                                    <td class="text-center">
                                    <a href="modificarcategoriasVista.php"><img src="../Vistas/recursos/img/editar.png"></a>
                                    <a href="consultarcategoriasVista.php"><img src="../Vistas/recursos/img/consultar.png"></a>  
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">SECCION IN3121</td>
                                    <td class="text-center">3</td>
                                    
                                    <td class="text-center">Aqui se almacera todos los cursos de la seccion IN3121</td>

                                    <td class="text-center">
                                    <a href="modificarcategoriasVista.php"><img src="../Vistas/recursos/img/editar.png"></a>
                                    <a href="consultarcategoriasVista.php"><img src="../Vistas/recursos/img/consultar.png"></a> 
                                    </td>
                                </tr>
                                <tr>
                                   <td class="text-center">1</td>
                                    <td class="text-center">SECCION IN3121</td>
                                    <td class="text-center">3</td>
                                    
                                    <td class="text-center">Aqui se almacera todos los cursos de la seccion IN3121</td>

                                    <td class="text-center">
                                        <a href="opCrudControladores/editarEstControlador.php"><img src="../Vistas/recursos/img/editar.png"></a>
                                         <a href="opCrudControladores/editarEstControlador.php"><img src="../Vistas/recursos/img/consultar.png"></a>
                                    </td>
                                </tr>
                                <tr>
                                   <td class="text-center">1</td>
                                    <td class="text-center">SECCION IN3121</td>
                                    <td class="text-center">3</td>
                                    
                                    <td class="text-center">Aqui se almacera todos los cursos de la seccion IN3121</td>

                                    <td class="text-center">
                                       <a href="opCrudControladores/editarEstControlador.php"><img src="../Vistas/recursos/img/editar.png"></a>
                                        <a href="opCrudControladores/editarEstControlador.php"><img src="../Vistas/recursos/img/consultar.png"></a>
                                    </td>
                                </tr>
                                <tr>
                                   <td class="text-center">1</td>
                                    <td class="text-center">SECCION IN3121</td>
                                    <td class="text-center">3</td>
                                    
                                    <td class="text-center">Aqui se almacera todos los cursos de la seccion IN3121</td>

                                    <td class="text-center">
                                        <a href="opCrudControladores/editarEstControlador.php"><img src="../Vistas/recursos/img/editar.png"></a>
                                         <a href="opCrudControladores/editarEstControlador.php"><img src="recursos/img/consultar.png"></a>           
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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