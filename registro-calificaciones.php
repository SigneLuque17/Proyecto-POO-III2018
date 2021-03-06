<?php 
   include("validar-sesion-docente.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jefes de departamento</title>
    <link rel="icon" href="img/logos/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/registro-calificaciones.css">
    

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
                <p id="jefe">REGISTRAR CALIFICACIONES DEL PERIODO</p><input type="hidden" value="<?php echo $_SESSION["numEmpleado"]?>" id="txt-empleado" disabled size=2> 
                <div  style="float:right; margin-right: 1%"><a href="login-docentes.php">Cerrar sesión  </a><i class="fas fa-times-circle" style="color:red"></i></div> 
            </div>
            <br><br>
            <hr>

            <div class="parte2">
                    <div class="form-control col-12 col-sm-12 col-md-6 col-lg-4" id="clases">
                        <p style="color:#fff"><b> ASIGNATURAS</b></p>
                        <select class="form-control col-12" name="clases" id="sl-clases">
                            <!--apareceran los nombres de las clases a las que se le han asignado al maestro-->
                        </select>
                    </div>  

                    <div class="form-control col-12 col-sm-12 col-md-6 col-lg-6" id="notas">
                        <p style="color:#fff; margin-left: 3%"><b>ALUMNOS</b></p>
                        <div class="col-lg-6" style="float: left">    
                            <select  multiple size="12" name="alumnos" id="alumnos" style="width:99%">
                                
                            </select>
                        </div>

                        <div class="col-6" style="float: left">
                            <p><b> Estado de Asignatura </b></p>
                            <p style="float:left">Nota final:</p><input id="txt-nota" class="form-control" type="number" style="width:25%; margin-left: 40%">
                         <br>  
                            <div class="radio">
                                <label><input type="radio" name="estado" value="NSP">NSP</label>
                            </div>

                            <div class="radio">
                                <label><input type="radio" name="estado" value="APR">APR</label>
                            </div>

                            <div class="radio">
                                <label><input type="radio" name="estado" value="REP">REP</label>
                            </div>
                        <br>
                            <button class="btn btn-primary" type="button" value="Guardar" id="btn-guardar">Guardar</button>

                        </div>
                            
                    </div>                      
            </div>
    </section>

    <section class="footer" style="margin: 0">
        <div id="derechos" style="padding:10px">
            <p>© Derechos Reservados UNAH 2018</p>
            <a href="#" style="color: #fff">Dirección Ejecutiva de Gestión de Tecnología (DEGT)</a>                  
        </div>
    </section>

    <script src="js/jquery-3.3.1.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/controlador-calificaciones.js"></script>

    </div>
</body>