<?php 
    include("validar-sesion.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Historial Académico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/historial.css">

    <style>
     .campo-invalido{
        border-color:red;
      }
      .campo-valido{
        border-color:rgb(0, 255, 13);
      }
    </style>
    
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


    <section class="seccion2" style="padding:2% 7%;">
            <div  style="float:right;"><a href="login.html">Cerrar sesión  </a><i class="fas fa-times-circle" style="color:red"></i></div> 
        <table cellspacing="0" cellpadding="0" style="font-size:14px; width:100%;border-collapse:collapse;border-collapse:separate; white-space: nowrap;">
            <thead >
                <tr>
                    <p id="encabezado1">Información General</p>
                </tr>
            </thead>
            <tbody>        
                    <tr>
                        <td>
                            <p><b>Cuenta</b></p>
                        </td>
                        <td>
                            <p><?php echo $_SESSION["cuenta"]?></p>
                        </td>
                        <td>
                            <p><b>Centro</b></p>
                        </td>
                        <td>
                            <p><?php echo $_SESSION["centro"]?></p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p><b>Nombre</b></p>
                        </td>
                        <td>
                            <p><?php echo $_SESSION["nombre"]?>  <?php echo $_SESSION["apellido"];?></p>
                        </td>
                        <td>
                            <p><b>Indice Global</b></p>
                        </td>
                        <td>
                            <p>##</p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p><b>Carrera</b></p>
                        </td>
                        <td>
                            <p><?php echo $_SESSION["carrera"]?></p>
                        </td>
                        <td>
                            <p><b>Indice Periodo</b></p>
                        </td>
                        <td>
                            <p>##</p>
                        </td>
                    </tr>
                </tr>
            </tbody>
        </table>
    </section>
    <hr>
    <section class="seccion3" style="padding: 2% 7%;">
        <div class="btn-group" role="group" style="margin:0; font-size:13px">
            <button type="button" class="btn btn-primary" style="position:relative">Historial Académico</button>
            <button type="button" class="btn btn-primary" style="position:relative">Indice Académico</button>
            <button type="button" class="btn btn-primary" style="position:relative">Seguimiento Calificaciones</button>
            <button type="button" class="btn btn-primary" style="position:relative">Indice de Repitencia</button>
            <button type="button" class="btn btn-primary" style="position:relative">Equivalencias</button>
        </div>       
        <section class="container-fluid border">
                <table class="table table-condensed" cellspacing="0" cellpadding="0" style="font-size:14px; width:100%;border-collapse:collapse;border-collapse:separate; white-space: nowrap;">
                <thead id="encabezado2">
                    <tr>
                        <td>CÓDIGO</td>
                        <td>ASIGNATURA</td>
                        <td>UV</td>
                        <td>SECCIÓN</td>
                        <td>AÑO</td>
                        <td>PERIODO</td>
                        <td>CALIFICACION</td>
                        <td>OBS</td>
                    </tr>
                </thead>
            </table>
        </section>   
    </section>

    <section class="footer" style="margin: 0">
            <div id="derechos" style="padding:10px">
                <p>© Derechos Reservados UNAH 2018</p>
                <a href="#" style="color: #fff">Dirección Ejecutiva de Gestión de Tecnología (DEGT)</a>                  
            </div>
    </section>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>