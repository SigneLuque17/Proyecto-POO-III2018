<?php
    switch($_GET["accion"]){
        case 1:
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
                
    $archivo = fopen("../data/matricula/".$registros["facultad"]."/".$registros["carrera"]."/".$_POST["cuenta"].".json", "a+");

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
        
            //obtener datos de la carrera
                $archivoCarrera = fopen("../data/carreras/".$_GET["facultad"]."/carreras.json","r");   
                while(($linea = fgets($archivoCarrera))){
                    $registroCarrera = json_decode($linea,true);
                    if($registroCarrera["carrera"] == $_GET["carrera"]){
                        //Obtener datos
                        $registro["codigo"] = $registroCarrera["codigo"];
                        
                        break;
                    }
                }
                fclose($archivoCarrera);

                $archivo = fopen("../data/matricula/".$_GET["facultad"]."/".$registro["codigo"]."/".$_GET["cuenta"].".json", "r");
                $registros = array();
                while(($linea=fgets($archivo))){
                    $registros[] = json_decode($linea, true);
                }   
                echo json_encode($registros);

        break;

        case 3:
                    if(isset($_POST)){
                        $respuesta2 = array();
                    
                                
                        //obtener datos del docente---------------------------
                                $archivoSeccion = fopen("../data/carreras/".$_POST["facultad"]."/asignaturas/secciones/".$_POST["codCarrera"]."-".$_POST["codClase"].".json","r");   
                                while(($linea = fgets($archivoSeccion))){
                                    $registroSeccion = json_decode($linea,true);
                                    if($registroSeccion["seccion"] == $_POST["seccion"]){
                                        //Obtener datos
                                        $registroNombre["docente"] =$registroSeccion["docente"];
                                                    
                                        break;
                                    }
                                }
                                fclose($archivoSeccion);

                                //obtener numero de empleado del docente/////////////
                                $archivoEmpleado = fopen("../data/empleados/docentes.json","r");   
                                while(($linea = fgets($archivoEmpleado))){
                                    $registroEmpleado = json_decode($linea,true);
                                    if($registroEmpleado["nombre"] == $registroNombre["docente"]){
                                        //Obtener datos
                                        $registrocodigo["numDocente"] =$registroEmpleado["num"];

                                        break;
                                    }
                                }
                                fclose($archivoEmpleado);
                                ////////////////////////////////
                                if(!file_exists("../data/empleados/docentes/".$registrocodigo["numDocente"]."/".$_POST["seccion"].".json")){
                                    $archivo = fopen("../data/empleados/docentes/".$registrocodigo["numDocente"]."/".$_POST["seccion"].".json", "w");
                                }

                        //-------------------------------------------------------

                        $archivo = fopen("../data/empleados/docentes/".$registrocodigo["numDocente"]."/".$_POST["seccion"].".json", "a+");
                        
                        $registro["cuenta"]= $_POST["cuenta"];
                                    //obtener nombre del alumno
                                    $archivoAlumno = fopen("../data/alumnos/alumnos.json","r");   
                                    while(($linea = fgets($archivoAlumno))){
                                        $registroAlumno = json_decode($linea,true);
                                        if($registroAlumno["cuenta"] == $_POST["cuenta"]){
                                            //Obtener datos
                                            $registro["alumno"] =$registroAlumno["nombre"];
                                            $registro["apellido"] =$registroAlumno["apellido"];
                                            $registro["facultad"] =$registroAlumno["facultad"];
                                            $nameCarrera["carrera"] =$registroAlumno["carrera"];

                                            break;
                                        }
                                    }
                                    fclose($archivoAlumno);
                                    ////////////////////////////////

                                        //obtener datos de la carrera
                                        $archivoCarrera = fopen("../data/carreras/".$registro["facultad"]."/carreras.json","r");   
                                        while(($linea = fgets($archivoCarrera))){
                                            $registroCarrera = json_decode($linea,true);
                                            if($registroCarrera["carrera"] == $nameCarrera["carrera"]){
                                                //Obtener datos
                                                $registro["carrera"] = $registroCarrera["codigo"];
                                                
                                                break;
                                            }
                                        }
                                        fclose($archivoCarrera);

                        fwrite($archivo, json_encode($registro)."\n");
                        fclose($archivo);
                    
                    
                        $respuesta2 = $registro;
                        $respuesta2["num"] = 1;                 
                        echo json_encode($registro);          
                    }
                    else{
                        echo '{"error":"1"}';
                    } 
            break;
    }
    
?>