<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menú principal de estudiantes</title>
    <link rel="icon" href="img/logos/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/matricula.css">
    <script src="js/jquery-3.3.1.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
</head>
<body>
    <div class="fondo">
    <section class="seccion1">
        <div class="container-fluid">
            <div class="row h-100 w-100">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div>
                            <img src="img/logos/logo-unah.png" id="logo">
                            <div id="texto1">
                                <p>Dirección de permanencia y promoción</p>
                                <p>DIPP-UNAH</p>
                            </div>
                        </div>                         
                    </div>
            </div>
        </div>
    </section>

                    <nav class="navbar navbar-expand-lg bg-light ">
    
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            
                              <ul class="navbar-nav mr-auto menus" >
                                    <li class="nav-item ">
                                        <a class="nav-link" href="inicio.php" style="color:fff; font-weight:bold">Página principal</a>
                                    </li>  
                                    
                                    <li class="nav-item ">
                                        <a class="nav-link" href="login.php" style="color:fff; font-weight:bold">Primer ingreso</a>
                                    </li>  

                                    <li class="nav-item active ">
                                        <a href="#" >Sistema de pregrado</a>
                                            <ul class="submenu">
                                                <li><a href="login.php">Estudiantes</a></li>
                                                <hr>
                                                <li><a href="login-docentes.php">Profesores</a></li>
                                                <hr>
                                                <li><a href="login-jefes.php">Jefes de departamento</a></li>
                                                <hr>
                                                <li><a href="#">Programas especiales</a></li>
                                                <hr>
                                                <li><a href="#">Suficiencias</a></li>
                                                <hr>
                                                <li><a href="login-coordinadores.php">Coordinador asignatura</a></li>      
                                            </ul>
                                    </li>
                                     
                                    <li class="nav-item ">
                                        <a href="#" >Sistema de postgrado</a>
                                            <ul class="submenu">
                                                <li><a href="#">Solicitudes de ingreso</a></li>
                                                <hr>
                                                <li><a href="#">Oferta académica</a></li>
                                                <hr>
                                                <li><a href="#">Servicio al estudiante</a></li>
                                                <hr>
                                                <li><a href="#">Coordinación de postgrados</a></li>
                                                <hr>
                                                <li><a href="calificaciones.html">Registro de calificaciones</a></li>    
                                            </ul>
                                    </li>  
                                    
                                    <li class="nav-item ">
                                            <a href="#" >Administración</a>
                                                <ul class="submenu">
                                                    <li><a href="administrador.html">Dirección académica</a></li>
                                                    <hr>
                                                    <li><a href="#">Comisionado universitario</a></li>
                                                    <hr>
                                                    <li><a href="#">Tesoreria</a></li>
                                                    <hr>
                                                    <li><a href="#">Decanos</a></li>
                                                    <hr>
                                                    <li><a href="">DIPP</a></li>  
                                                    <hr>
                                                    <li><a href="#">SEAPI</a></li>   
                                                </ul>
                                        </li>
                              </ul>
                       
                            </div>
                    </nav>

        <section>
                <div>
                    <p id="jefe">MATRÍCULA</p>                   
                    <div  style="float:right; margin-right: 1%"><a href="login.php">Cerrar sesión  </a><i class="fas fa-times-circle" style="color:red"></i></div> 
                    <br>
                    <div style="margin-left: 15px;margin-top: 3%">
                        <P><b> Matrícula de pregrado</b></P>
                    </div>       
                </div>       
<hr>
                <div class="parte2">
                        <div class="container">
                        <table>
                            <tr>
                                <td> <img src="img/iconos/flecha1.jpg"> <a href="adicionar-asignatura.php">Adicionar asignatura</a></td>
                            </tr>
                            <tr>
                                <td> <img src="img/iconos/flecha1.jpg"> <a  href="0-cancelar-asinatura.html"> Cancelar asignatura</a></td>
                               
                            </tr>
                            <tr>
                                <td><img src="img/iconos/flecha1.jpg"><a href="1-lista-asig-cancelada.html"> Listado de asignaturas canceladas</a></td>
                            </tr>
                            <tr>
                                <td><img src="img/iconos/flecha1.jpg"><a href="003.php"> Forma 03</a> </td>
                                <td><a href="#" style="margin-left:5%">Oferta de asignaturas en modalidad en línea, Tegucigalpa</a></td>
                            </tr>
                            <tr>
                                <td><img src="img/iconos/flecha1.jpg"><a href="0-clases-en-espera.html">Lista de Asignaturas en Lista de Espera</a> </td>            
                                <td><a href="#"  style="margin-left:5%">Oferta, requisitos y fecha de induccion, matricula en línea</a></td>
                            </tr>
                            <tr>
                                <td><img src="img/iconos/flecha1.jpg"><a href="1-cancelar-clases-espera.html"> Cancelar Asignatura en Lista de Espera</a> </td>
                            </tr>
                            <tr>
                                <td><img src="img/iconos/flecha1.jpg"><a href="#"> Estado de cuenta</a> </td>
                            </tr>
                        </table>                     
                </div>
                </div>
        </section>

        <section class="footer" style="margin: 0">
            <div id="derechos" style="padding:10px">
                <p>© Derechos Reservados UNAH 2018</p>
                <a href="#" style="color: #fff">Dirección Ejecutiva de Gestión de Tecnología (DEGT)</a>                  
            </div>
        </section>



    </div>
</body>      


