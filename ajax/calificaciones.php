<?php
switch($_GET["accion"]){
                case 1:
                $archivo = fopen("../data/empleados/docentes/".$_GET["numDocente"]."/secciones.json", "r");
                $registros = array();
                while(($linea=fgets($archivo))){
                    $registros[] = json_decode($linea, true);
                }

                echo json_encode($registros);

                break;

                case 2:
                   
                   
                break;

                case 2:
                   
                   
                break;
}
?>