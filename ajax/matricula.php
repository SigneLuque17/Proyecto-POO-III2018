<?php
    switch($_GET["accion"]){
        case 1:
            if(isset($_POST['cuenta'])){
                include("../class/class-matricula.php");   
                $l = new Carpetas($_POST["nombreElemento"],"",$_POST["fechaModificacion"], $_POST["fechaCreacion"], $_POST["usuario"],$_POST["tamanio"]);
                echo $l->guardarCarpeta($_POST["cuenta"]);
            } else{
                echo '{"error":"1"}';
            }
    
        break;

        case 2:
        
            if(isset($_POST['carpetaActual'])){
                include("../class/class-archivos.php");   
                $l = new Archivos($_POST["nombreElemento"],"",$_POST["fechaModificacion"], $_POST["fechaCreacion"], $_POST["usuario"],$_POST["tamanio"]);
                echo $l->guardarArchivo($_POST["carpetaActual"]);
            } else{
                echo '{"error":"1"}';
            }   
        break;
    }
    
?>