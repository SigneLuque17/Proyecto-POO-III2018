<?php
    $archivo = fopen("../data/alumnos/historial/".$_GET["cuenta"].".json", "r");
    $registros = array();
    while(($linea=fgets($archivo))){
        $registros[] = json_decode($linea, true);
    }   
    echo json_encode($registros);
?>