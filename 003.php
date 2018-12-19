<?php 
    include("validar-sesion.php");
?>
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
    <link rel="stylesheet" href="css/forma03.css">
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
                    </nav><br>
                    
                
    <main>      
         <div>
         <h4><b> Forma 03 Matrícula </b></h4>
         <strong>Clases Matriculadas </strong><hr>

         <div style="text-align: right; height: 90px;">
            <table style="width:100%">
                <tbody>
                    <tr>
                    <td class="style18" style="text-align: left">
                        
                    </td>
                    <td style="text-align: left">
                        
                    </td>
                    <td>
            [<a id="atras" href="#">Atras</a>
                        ]
            [<a id="cerrar" href="login.html">Cerrar Sesión</a>
                        ]</td>
                </tr>
            </tbody>
        </table>

            <div style="text-align: right">
                 
                <hr>
                </div>
            </div>

                    </div>
<!--tabla de informacion de forma 003-->
<main class="container">
        <table cellspacing="0" cellpadding="10">
        <tbody>
            <tr>
                <td class="style112" rowspan="4">
                <a><img src="img/anuncios/profile.jpg " style="height:130px; width:125px;"></a>
                    </td>
                    <td>Cuenta:</td>
                    <td><?php echo $_SESSION["cuenta"]?></td>
                    <td >Centro:</td>
                    <td ><?php echo $_SESSION["centro"]?></td>
                </tr>
    
                <tr>
                    <td >Nombre:</td>
                    <td><?php echo $_SESSION["nombre"]?>  <?php echo $_SESSION["apellido"];?></td>
                    <td>Año:</td>
                    <td><span>2018</span>
                    </td>      
                </tr>
                <tr>
                    <td> Carrera:</td>
                    <td ><span ><?php echo $_SESSION["carrera"]?></span></td>
                </tr>
            </tbody>
        </table>
     </main>
   
<!----->



<section>
<p id="parrafo"> Asignaturas Matriculadas </p>
</section>



<!--clases matriculadas-->
  <div class="container">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<table id="table1" cellspacing="0" cellpadding="0" rules="all" style="background-color:White;border-color:#CCCCCC">
    <tbody><!--titulos de tabla-->
        <tr style="color:White;background-color:#006699">
        <th>Cod.</th>
        <th>Asignatura</th>
        <th>Sección</th>
        <th>HI</th>
        <th>HF</th>
        <th>Dias</th>
        <th>Edificio</th>
        <th>Aula</th>
        <th>UV</th>
        <th>Periodo</th>
        <th>OBS</th>
        <th>Semana</th>
    
   <!--contenido tabla-->
   <tr id="tabla" style="color:#000066;">
            
     </tr>
            
</tbody>
</table>
</div>
</div>


<section>
<div id="parrafo2">

    <p>Laboratorios Matriculados</p>
</div>
</section>

<div class="container">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<table cellspacing="0" cellpadding="0" rules="all" style="background-color:White;border-color:#CCCCCC">
   <tbody><!--titulos de tabla-->
       <tr style="color:White;background-color:#006699">
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
   
   </tr><!--contenido tabla-->
   <tr style="color:#000066;">
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
   </tr>
   
   
</tbody>
</table>
</div>
</div>




</main>
<br><br><br><br><br>
    <section class="footer" style="margin: 0">
        <div id="derechos" style="padding:10px">
            <p>© Derechos Reservados UNAH 2018</p>
            <a href="#" style="color: #fff">Dirección Ejecutiva de Gestión de Tecnología (DEGT)</a>                  
        </div>
    </section>

  
<script src="js/jquery-3.3.1.js"></script>
</body>
</html>