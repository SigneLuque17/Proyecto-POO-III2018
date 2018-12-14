<?php
class Carrera{
	private $nombre;
	private $ubicacion;

	public function __construct(
		$nombre = null,
		$cod = null,
		$facu = null
		
	){

		$this->nombre = $nombre;
		$this->cod = $cod;
		$this->facu = $facu;
		
	}

	public function __toString(){
		$var = "Carrera{"
		."nombre: ".$this->nombre." , "
		."cod: ".$this->cod." , "
		."facu: ".$this->facu;
		return $var."}";
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getFacu(){
		return $this->facu;
	}

	public function setFacu($facu){
		$this->facu = $facu;
	}

	public function getCod(){
		return $this->cod;
	}

	public function setCod($cod){
		$this->cod = $cod;
	}

	
	public static function obtenerCarrera(){	
	$archivo = fopen("../data/carreras/".$_GET["facultad"]."/carreras.json", "r");
	$registros = array();
	while(($linea=fgets($archivo))){
		$registros[] = json_decode($linea,true);
	}
	return json_encode($registros);
	}

	public function guardarCarrera(){
        $respuesta = array();
        if(isset($_POST["carrera"])){
            if(!file_exists("../data/carreras/".$_POST["facultad"]."/carreras.json")){
                $archivo = fopen("../data/carreras/".$_POST["facultad"]."/carreras.json", "w");
            }
            $archivo = fopen("../data/carreras/".$_POST["facultad"]."/carreras.json", "a+");
           
			$registro["carrera"] = $this->nombre;
			$registro["codigo"] = $this->cod;
			$registro["facultad"] = $this->facu;
			

            fwrite($archivo, json_encode($registro)."\n");
            fclose($archivo);

            $respuesta = $registro;
            $respuesta["num"] = 1;
            echo json_encode($respuesta);
        }else{
            $respuesta["num"] = 0;
            echo json_encode($respuesta);
           
        }

    }
}
?>