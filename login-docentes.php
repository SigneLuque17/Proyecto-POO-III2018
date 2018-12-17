<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login docente</title>
    <link rel="icon" href="img/logos/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/login.css">
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
                        <a class="nav-link" href="login.html" style="color:fff; font-weight:bold">Primer ingreso</a>
                    </li>  

                    <li class="nav-item active ">
                        <a href="#" >Sistema de pregrado</a>
                            <ul class="submenu">
                                <li><a href="estudiantes.html">Estudiantes</a></li>
                                <hr>
                                <li><a href="profesores.html">Profesores</a></li>
                                <hr>
                                <li><a href="jefes.html">Jefes de departamento</a></li>
                                <hr>
                                <li><a href="#">Programas especiales</a></li>
                                <hr>
                                <li><a href="#">Suficiencias</a></li>
                                <hr>
                                <li><a href="coordinador.html">Coordinador asignatura</a></li>      
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
                                <li><a href="#">Registro de calificaciones</a></li>    
                            </ul>
                    </li>  
                    
                    <li class="nav-item ">
                            <a href="#" >Administración</a>
                                <ul class="submenu">
                                    <li><a href="#">Dirección académica</a></li>
                                    <hr>
                                    <li><a href="#">Comisionado universitario</a></li>
                                    <hr>
                                    <li><a href="#">Tesoreria</a></li>
                                    <hr>
                                    <li><a href="#">Decanos</a></li>
                                    <hr>
                                    <li><a href="#">DIPP</a></li>  
                                    <hr>
                                    <li><a href="#">SEAPI</a></li>   
                                </ul>
                        </li>
              </ul>
       
            </div>
    </nav>

    <section>
        <p id="docente">INICIO DE SESIÓN DOCENTES</p>
        <P style="margin-left: 15px">Para accesar debes autenticarte</P>
        <hr>

        <form id="form1"> 
            <fieldset class="login">
                <legend class="borde">Ingresa tu Nº de empleado y clave:</legend>
                <hr>
                <div style="font-size:0.9em">
                    No. empleado: <input type="text" style="width:55%;margin-bottom: 3px;" id="numEmpleado">               <br>
                    Clave:        <input type="password" style="width:55%; margin-left: 20%" id="clave">       <br>
                </div>
                <hr>
                <button type="button" class="btn btn-warning" style="margin-left:35%" id="logProf">Ingresar</button><br>
            </fieldset>
        </form>
        <div id="advertencia" >
        <p> <img src="img/iconos/alerta1.png"> Si tiene problemas para ingresar al sistema, favor comunicarse al Tel: 2232-6862</p>
        <p> <img src="img/iconos/alerta1.png">  Para una mejor experiencia de navegación utilice los navegadores Internet Explorer o Google-Chrome</p>
        </div>
    </section>

    <section class="footer">
            <div id="derechos" style="padding:10px">
                <p>© Derechos Reservados UNAH 2018</p>
                <a href="#" style="color: #fff">Dirección Ejecutiva de Gestión de Tecnología (DEGT)</a>                  
            </div>
    </section>


    </div>
    <script src="js/controlador-empleados.js"></script>
</body>
</html>