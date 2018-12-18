<?php
    switch($_GET["accion"]){
        case 1:
        if(isset($_POST)){
            $respuesta = array();
            $archivo = fopen("../data/matricula/".$_POST["facultad"]."/".$_POST["codCarrera"]."/".$_POST["cuenta"].".json", "a+");
                    
            //obtener datos de la seccion/////////////
                    $archivoSeccion = fopen("../data/carreras/".$_POST["facultad"]."/asignaturas/secciones/".$_POST["codCarrera"]."-".$_POST["codClase"].".json","r");   
                    while(($linea = fgets($archivoSeccion))){
                        $registroSeccion = json_decode($linea,true);
                        if($registroSeccion["seccion"] == $_POST["seccion"]){
                            //Obtener datos
                            $registro["codCarrera"] =$registroSeccion["codCarrera"];
                            $registro["codClase"] =$registroSeccion["codClase"];
                            $registro["uv"] =$registroSeccion["UV"];
                            $registro["clase"] =$registroSeccion["clase"];
                            $registro["seccion"] =$registroSeccion["seccion"];
                            $registro["inicio"] =$registroSeccion["inicio"];
                            $registro["final"] =$registroSeccion["final"];
                            $registro["dias"] =$registroSeccion["dias"];
                            $registro["edificio"] =$registroSeccion["edificio"];
                            $registro["aula"] =$registroSeccion["aula"]; 

                            break;
                        }
                    }
                    fclose($archivoSeccion);

            fwrite($archivo, json_encode($registro)."\n");
            fclose($archivo);
           
           
            $respuesta = $registro;
            $respuesta["num"] = 1;
            echo json_encode($respuesta);          
        }
        else{
            echo '{"error":"1"}';
        } 
            break;

            case 2:

            include("../class/class-matricula.php");
            echo Matricula::obtenerMatricula($_GET["facultad"],$_GET["Carrera"],$_GET["codClase"].$_POST["cuenta"]);
        
         /*   if(isset($_POST["seccion"])){
                        $respuesta = array();    
                    
                            if(!file_exists("../data/matricula/".$_POST["facultad"]."/".$_POST["codCarrera"]."/".$_POST["cuenta"].".json")){
                                        $archivo = fopen("../data/matricula/".$_POST["facultad"]."/".$_POST["codCarrera"]."/".$_POST["cuenta"].".json", "w");
                            }
                                    $archivo = fopen("../data/matricula/".$_POST["facultad"]."/".$_POST["codCarrera"]."/".$_POST["cuenta"].".json", "a+");
                        
                                    //obtener datos de la seccion/////////////
                                            $archivoSeccion = fopen("../data/carreras/".$_POST["facultad"]."/asignaturas/secciones/".$_POST["codCarrera"]."-".$_POST["codClase"].".json","r");   
                                            while(($linea = fgets($archivoSeccion))){
                                                $registroSeccion = json_decode($linea,true);
                                                if($registroSeccion["seccion"] == $_POST["seccion"]){
                                                    //Obtener datos
                                                    $registro["codCarrera"] =$registroSeccion["codCarrera"];
                                                    $registro["codClase"] =$registroSeccion["codClase"];
                                                    $registro["uv"] =$registroSeccion["uv"];
                                                    $registro["clase"] =$registroSeccion["clase"];
                                                    $registro["seccion"] =$registroSeccion["seccion"];
                                                    $registro["inicio"] =$registroSeccion["inicio"];
                                                    $registro["final"] =$registroSeccion["final"];
                                                    $registro["dias"] =$registroSeccion["dias"];
                                                    $registro["edificio"] =$registroSeccion["edificio"];
                                                    $registro["aula"] =$registroSeccion["aula"]; 
    
                                                    break;
                                                }
                                            }
                                            fclose($archivoSeccion);
    
                                    fwrite($archivo, json_encode($registro)."\n");
                                    fclose($archivo);
                        
                                    $respuesta = $registro;
                                    $respuesta["num"] = 1;
                                    echo json_encode($respuesta);
                                else{
                                    $respuesta["num"] = 0;
                                    echo json_encode($respuesta);
                                } 
                            
                     else{
                        echo '{"error":"1"}';
                    }*/
    
            break;
        }
        
    
?>