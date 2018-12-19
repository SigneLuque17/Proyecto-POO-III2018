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
                    $archivo = fopen("../data/empleados/docentes/".$_GET["numDocente"]."/".$_GET["seccion"].".json", "r");
                    $registros = array();
                    while(($linea=fgets($archivo))){
                        $registros[] = json_decode($linea, true);
                    }

                    echo json_encode($registros);
                   
                break;

                case 3:
                        if(isset($_POST)){
                            $respuesta = array();
                                        
                                //obtener nombre del alumno
                                $archivoAlumno = fopen("../data/alumnos/alumnos.json","r");   
                                while(($linea = fgets($archivoAlumno))){
                                    $registroAlumno = json_decode($linea,true);
                                    if($registroAlumno["cuenta"] == $_POST["cuenta"]){
                                        //Obtener datos
                                        $registros["facultad"] =$registroAlumno["facultad"];
                                        $nameCarrera["carrera"] =$registroAlumno["carrera"];
                
                                        break;
                                    }
                                }
                                fclose($archivoAlumno);
                                ////////////////////////////////
                
                                    //obtener datos de la carrera
                                    $archivoCarrera = fopen("../data/carreras/".$registros["facultad"]."/carreras.json","r");   
                                    while(($linea = fgets($archivoCarrera))){
                                        $registroCarrera = json_decode($linea,true);
                                        if($registroCarrera["carrera"] == $nameCarrera["carrera"]){
                                            //Obtener datos
                                            $registros["carrera"] = $registroCarrera["codigo"];
                                            
                                            break;
                                        }
                                    }
                                    fclose($archivoCarrera);
                                
                        if(!file_exists("../data/alumnos/historial/".$_POST["cuenta"].".json")){
                            $archivo = fopen("../data/alumnos/historial/".$_POST["cuenta"].".json", "w");
                        }

                        $archivo = fopen("../data/alumnos/historial/".$_POST["cuenta"].".json", "a+");
                
                            //obtener datos de la seccion/////////////
                                    $archivoSeccion = fopen("../data/matricula/".$registros["facultad"]."/".$registros["carrera"]."/".$_POST["cuenta"].".json","r");   
                                    while(($linea = fgets($archivoSeccion))){
                                        $registroSeccion = json_decode($linea,true);
                                        if($registroSeccion["seccion"] == $_POST["seccion"]){
                                            //Obtener datos
                                            $registro["codCarrera"] =$registroSeccion["codCarrera"];
                                            $registro["codClase"] =$registroSeccion["codClase"];
                                            $registro["clase"] =$registroSeccion["clase"];
                                            $registro["uv"] =$registroSeccion["uv"];
                                            
                                            break;
                                        }
                                    }
                                    fclose($archivoSeccion);
                                            $registro["seccion"] =$_POST["seccion"];
                                            $registro["año"] ="2018";
                                            $registro["periodo"] ="3";
                                            $registro["nota"]= $_POST["nota"];
                                            $registro["estado"]= $_POST["estado"];

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
}
?>