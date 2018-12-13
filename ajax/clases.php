<?php
    switch($_GET["accion"]){
        case 1:
         /*   include("../class/class-clases.php");
            echo Clase::obtenerCarrera();*/
            $archivo = fopen("../data/carreras/".$_GET["facultad"]."/carreras.json", "r");
            while(($linea=fgets($archivo))){
                $registros[] = json_decode($linea,true);
            }
            fclose($archivo); 
            echo json_encode($registros);
         
        break;
        case 2:
           include("../class/class-clases.php");   
           $l = new Clase($_POST["clase"],$_POST["codigo"], $_POST["uv"],$_POST["carrera"], $_POST["facultad"]);
           echo $l->guardarClase();
        
        break;
}
?>