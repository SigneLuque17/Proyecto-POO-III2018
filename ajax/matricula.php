<?php
    switch($_GET["accion"]){
        case 1:
            
    
        break;

        case 2:
                if(isset($_POST['seccion'])){
                    include("../class/class-matricula.php");   
                    $l = new Matricula(" ", " "," ", " "," ", " "," ", " "," ", " ");
                    echo $l->guardarMatricula();
                } else{
                    echo '{"error":"1"}';
                }

        break;
    }
    
?>