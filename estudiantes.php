<?php 
   include("validar-sesion.php");
?>
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
    <link rel="stylesheet" href="css/estudiantes.css">
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
                                        <a class="nav-link" href="inicio.html" style="color:fff; font-weight:bold">Página principal</a>
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
            <p id="estudiante">SERVICIOS AL ESTUDIANTE</p>
            <div  style="float:right; margin-right: 1%"><a href="login.php">Cerrar sesión  </a><i class="fas fa-times-circle" style="color:red"></i></div> 
        </div>
    <br>
        <div style="margin-left: 15px;margin-top: 1%" id="derechos">
           <br>
            <p> <b> Bienvenid@:</b> <?php echo $_SESSION["nombre"]?>  <?php echo $_SESSION["apellido"];?></p>
            <p>Tu cuenta de correo electrónico institucional es: <?php echo $_SESSION["mail"];?></p>
            <p  style="float:left; margin-right: 1%" >Su número de identidad es <?php echo $_SESSION["id"];?></p>
        
            <figure id="photo" title="Si no esta correcto, favor abocarse con la Identidad Original y la fotocopia por ambos lados a la DIPP-Registro UNAH a nivel nacional" tooltip-dir="right">
                    <img src="img/iconos/read.png"/>
            </figure>

        </div>
           
        
        <hr style="margin: 0">
        <div  class="parte2">
            <div style="float:left;">
                <img src="img/iconos/email.png">
                <a href="#">Cambia la contraseña de tu correo institucional</a>
            </div>
        
            <div style="float:right; padding: 5%"> 
                <i class="far fa-file-pdf"></i><a href="#">    Instructivo Estudiantes</a>      <br>
                <i class="far fa-file-pdf"></i><a href="#">    Requisito de matrícula para secciones en línea</a>
            </div>
        </div>


        <div class="parte3">
            <table>
                <tr>
                    <td> <img src="img/iconos/flecha1.jpg"> <a href="historial-academico.php"> Historial académico</a></td>
                    <td id="gris"> | Puedes ver tu historial académico</td>
                </tr>
                <tr>
                    <td> <img src="img/iconos/flecha1.jpg"><a href="#"> Solicitudes</a></td>
                    <td id="gris">| Ahora puedes hacer tu solicitud de cambio de centro, carrera, <br> activación de pago para examen de reposición, historiales y certificaciones</td>
                </tr>
                <tr>
                    <td><img src="img/iconos/flecha1.jpg"><a href="matricula.php"> Matrícula</a></td>
                    <td id="gris">| Realiza tu Matrícula del periodo</td>
                </tr>
                <tr>
                    <td><img src="img/iconos/flecha1.jpg"><a href="matricula-laboratorio.html"> Matrícula de Laboratorios</a> </td>
                    <td id="gris">| Realiza tu Matrícula de Laboratorio</td>
                </tr>
                <tr>
                    <td><img src="img/iconos/flecha1.jpg"><a href="#"> Censo de Matrícula</a></td>
                    <td id="gris">| Realiza tu censo de periodo académico</td>
                </tr>
                <tr>
                    <td><img src="img/iconos/flecha1.jpg"><a href="#"> Cambio Clave</a></td>
                    <td id="gris">| Realiza el cambio de tu clave de acceso al sistema</td>
                </tr>
                <tr>
                    <td><img src="img/iconos/flecha1.jpg"><a href="#"> Ver calificaciones del período</a></td>
                    <td id="gris">| Podras ver las calificaciones del período actual</td>
                </tr>
                <tr>
                    <td><img src="img/iconos/flecha1.jpg"><a href="#"> Ver programación académica</a></td>
                    <td id="gris">| Podras ver la programación académica del siguiente periodo</td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <div> 
                <img src="img/iconos/evaluacion.gif"  id="evaluacion">
                <br> 
                <a href="Evaluacion-docente.html" style="float: right; margin-right: 7%; color: #4CAF50 ">Evaluar Docentes</a>                                         
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
</html>