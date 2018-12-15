<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página principal DIPP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/inicio.css">
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
                                                    <li><a href="empleados.html">DIPP</a></li>  
                                                    <hr>
                                                    <li><a href="#">SEAPI</a></li>   
                                                </ul>
                                        </li>
                              </ul>
                       
                            </div>
                    </nav>


<section>
        <div class="container-fluid">
            <div class="row h-100 w-100">

                <img src="img/instalaciones/registro.jpg" style="width:102.9%; height:70%">
                    <div class="cupos">
                        <button class="btn btn-info btn-lg">Cupos de Medicina</button>
                        <button class="btn btn-info btn-lg">Cupos de Microbiología</button>
                        <button class="btn btn-info btn-lg">Cupos de Nutrición</button>
                        <button class="btn btn-info btn-lg">Cupos de Arquitectura</button>
                    </div>

                    <div  class=" border-info rounded avisos">
                        <h1 id="aviso">Avisos de pagos importantes</h1>
                        <hr>
                        <a href="#" id="pagos">Pago de Matrícula</a>                      
                        <a href="#" id="pagos">Pago de Laboratorio</a>      
                        <br>       
                            <img style="margin:5%" src="img/anuncios/calendarioPagoIII2018.jpg" onmouseover="this.width=500;this.height=500;" onmouseout="this.width=200;this.height=200;" width="200" height="200" alt="" />
                            <img style="margin:5%" src="img/anuncios/pagoLabIII2018.jpg" onmouseover="this.width=500;this.height=500;" onmouseout="this.width=200;this.height=200;" width="200" height="200" alt="" />
               
     <!--      width=500: Ancho de la imagen original. 
               height=500: Altura de la imagen original. 
               width=400: Ancho de la imagen que quieres que quede después de pasarle el mouse (Se recomienda el mismo tamaño que la imagen miniatura). 
               height=400: Altura de la imagen que quieres que quede después de pasarle el mouse (Se recomienda el mismo tamaño que la imagen miniatura). 
               width="300": Ancho de la imagen en miniatura. 
               height="300": Altura de la imagen en miniatura.  -->                   

                    </div>
            <br>
                    <div class="rounded calendario">
                        <a href="#" id="calendario">Calendario matrícula III Período Académico 2018</a>
                        <hr id="linea1">    
                        <br> 
                        <img style="margin-bottom: 5%;" src="img/anuncios/calendarioIII2018.png" onmouseover="this.width=600;this.height=700;" onmouseout="this.width=200;this.height=200;" width="200" height="200" alt="" />           
                    </div>
            <br>
                    <div class=" rounded solicitud">
                        <p id="titulo-solicitud">Solicitud Estudiantes Readmitidos admitidos</p>
                        <img src="img/iconos/solicitud.png" style="width:15%; float: left; margin-left: 5%">
                            <div id="llenar-solicitud">                                  
                                <a href="#">»Llenar Solicitud</a> <br><br>
                                <a href="#">»Requisitos estudiantes readmitidos</a>                            
                            </div>                      
                    </div>
            <br>
                    <div class="rounded avisos-generales">
                        <h1 id="aviso">Avisos generales</h1>
                        <hr>
                        <a href="#" style="color:black">Aspirantes y Estudiantes a la Carrera de Medicina Primer ingreso</a>
                    </div>                 
            </div>
        </div>
    </section>
            <br>
    <section class="footer">
            <div class="botones">
                <button class="btn btn-outline-warning btn-sm" ><i class="fas fa-comment"></i>  Contáctanos</button>
                <button class="btn btn-outline-warning btn-sm"> <img src="img/logos/facebook.png" style="width:10%">Encuéntranos en Facebook</button>
            </div>   
            <div>
                <p>© Derechos Reservados UNAH 2018</p>
                <a href="#" style="color: #fff">Dirección Ejecutiva de Gestión de Tecnología (DEGT)</a>                  
            </div>
    </section>

</div>  
</body>
</html>