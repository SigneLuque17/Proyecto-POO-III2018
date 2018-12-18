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
    <link rel="stylesheet" href="css/adicionar.css">
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
                <div>
                    <p id="jefe">ADICIONAR ASIGNATURAS</p>                   
                    <div  style="float:right; margin-right: 1%"><a href="login.html">Cerrar sesión  </a><i class="fas fa-times-circle" style="color:red"></i></div> 
                    <br>
                    <div style="margin-left: 15px;margin-top: 3%">
                        <P><b> Matrícula de Periodo</b></P>
                    </div>       
                </div>       
<hr>
                <div class="parte2">
                    <section class="seccion2">
                         <div style="background-color: #1994ff" id="derechos">   
                             <p id="encabezado1">Datos del Estudiante</p>  
                         </div>      
                         <table cellspacing="0" cellpadding="0" id="tabla1">
                             <tbody> 
                                        <tr>
                                            <td>
                                                <p><b>Nombre:</b></p>
                                            </td>
                                            <td>
                                                <p><?php echo $_SESSION["nombre"]?>  <?php echo $_SESSION["apellido"];?></p>
                                            </td>
                                            <td>
                                                <p><b>Carrera:</b></p>
                                            </td>
                                            <td>
                                                <p id="carrerasss"><?php echo $_SESSION["carrera"]?></p>
                                            </td>
                                        </tr>
                    
                                        <tr>
                                            <td>
                                                <p><b>Cuenta:</b></p>
                                            </td>
                                            <td>
                                                <p><?php echo $_SESSION["cuenta"]?></p>
                                            </td>

                                            <td>
                                                <p><b>UV Disponibles:</b></p>
                                            </td>
                                            <td>
                                                <p>25</p>
                                            </td>
                                        </tr>
                    
                                        <tr>
                                            <td>
                                                <p><b>Periodo</b></p>
                                            </td>
                                            <td>
                                                <p>3</p>
                                            </td>

                                            <td>
                                                <p><b>Año:</b></p>
                                            </td>
                                            <td>
                                                <p>2018</p>
                                            </td>

                                        </tr>
                                    </tr>
                             </tbody> 
                             
                         </table>  
                    </section> 

                    <div>
                        <button id="asignar-clase" style="margin-left:7%"  class="btn btn-success" type="button" data-toggle="modal" data-target="#modal-matricular">Seleccionar Asignatura</button>
                    </div>
                    
                    <div class="seccion2">
                            <div style="background-color: #1994ff" id="derechos">   
                                    <p id="encabezado1">Asignaturas Matriculadas</p>  
                            </div>   
                            <table class="border" cellspacing="0" cellpadding="0" id="tabla2">
                                    <thead> 
                                        <!--fila 1-->
                                               <tr>
                                                   <td>
                                                       <p><b>Cod.</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Asignatura</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Sección</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HI</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HF</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Días</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>UV</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Periodo</b></p>
                                                   </td>
                                               </tr>
                                        
                                              
                                    </thead>
                                    <tbody id="clases-matriculadas">
                                    <!--fila 2 se ira anadiendo conforme las asignaturas seleccionadas-->
                                    </tbody>
                            </table>  
<br>
                            <div style="background-color: #1994ff" id="derechos">   
                                    <p id="encabezado1">Asignaturas en Lista de Espera</p>  
                            </div>   
                            <table class="border" cellspacing="0" cellpadding="0" id="tabla2">
                                    <tbody > 
                                        <!--fila 1-->
                                               <tr>
                                                   <td>
                                                       <p><b>Cod.</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Asignatura</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Sección</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HI</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HF</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Días</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>UV</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Periodo</b></p>
                                                   </td>
                                               </tr>
                                        <!--fila 2 se ira anadiendo conforme las asignaturas seleccionadas-->
                                              
                                    </tbody>
                            </table> 
<br>
                            <div style="background-color: #1994ff" id="derechos">   
                                    <p id="encabezado1">Laboratorios Matriculados</p>  
                            </div>   
                            <table class="border" cellspacing="0" cellpadding="0" id="tabla2">
                                    <tbody > 
                                        <!--fila 1-->
                                               <tr>
                                                   <td>
                                                       <p><b>Cod.</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Asignatura</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Sección</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HI</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>HF</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Días</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>UV</b></p>
                                                   </td>
                                                   <td>
                                                        <p><b>Periodo</b></p>
                                                   </td>
                                               </tr>
                                        <!--fila 2 se ira anadiendo conforme las asignaturas seleccionadas-->
                                              
                                    </tbody>
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

<!--********************************VENTANA MODAL *****************************************-->
<!-- Modal -->
<div class="modal fade" id="modal-matricular" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            
              <!-- Modal content-->
            <div class="modal-content" style="background-color:#183F60">
                <div class="modal-header centrar" >
                  <h6 class="modal-title" style="color:white"  ><b>Asignaturas</b></h6>
                  <input type="hidden" value="<?php echo $_SESSION["cuenta"]?>" id="usuario-matriculando" disabled size=0>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="background-color:rgb(255, 255, 255);" class="col-12 col-sm-12 col-md-6 col-lg-6 form-control">                
                     <div class="row centrar">               
                         <div class="col-12" style="margin-bottom:2%">
  
                            <div>
                                    <select name="facultades" id="slc-facultades" class="form-control col-12 col-sm-12 col-md-6 col-lg-6 " style="float:left">
                                        <!--AQUI SE VISUALIZAN LAS FACULTADES-->
                                    </select>

                                    <select class="form-control col-12 col-sm-12 col-md-6 col-lg-6 " id="select-carreras" style="float:left">
                                        <!--AQUI SE VISUALIZAN LAS CARRERAS-->
                                    </select>

                                    <select multiple class="form-control col-12 col-sm-12 col-md-12 col-lg-12 " id="select-clases"  size="5">
                                        <!--AQUI SE VISUALIZAN LAS CLASES DE LA CARRERA-->                                       
                                    </select>

                                    <select multiple class="form-control col-12 col-sm-12 col-md-12 col-lg-12 " id="select-secciones" size="12">
                                        <!--AQUI SE VISUALIZAN LAS SECCIONES DE LA CLASE-->      
                                    </select>
                            </div>

                         </div>  
                         <br>                                                    
                     </div>
                </div>  
                <div class="modal-footer">
                    <button class="btn btn-success centrar"  type="button" value="matricular" id="btn-matricular">Matricular</button>
                </div>                              
            </div>
        </div>
          
    </div>
<!--********************************FIN VENTANA MODAL*****************************************-->


    </div>

    <script src="js/jquery-3.3.1.js"></script>     
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador-matricula.js"></script>
</body>      


