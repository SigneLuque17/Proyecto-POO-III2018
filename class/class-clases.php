<?php
class Clase{
	private $nombre;
    private $codigo;
    private $facu;
    private $carrera;

	public function __construct(
		$nombre = null,
        $codigo = null,
        $uv = null,
        $facu = null,
        $carrera = null
		
	){

		$this->nombre = $nombre;
        $this->codigo = $codigo;
        $this->uv = $uv;
        $this->facu = $facu;
        $this->carrera = $carrera;
		
	}

	public function __toString(){
		$var = "Clase{"
		."nombre: ".$this->nombre." , "
        ."codigo: ".$this->codigo." , "
        ."uv: ".$this->uv." , "
        ."facu: ".$this->facu." , "
		."carrera: ".$this->carrera;
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

	public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
    }
    
    public function getCarrera(){
		return $this->carrera;
	}

	public function setCarrera($carrera){
		$this->carrera = $carrera;
	}

    public function getUv(){
		return $this->uv;
	}

	public function setUv($uv){
		$this->uv = $uv;
	}



	public static function obtenerCarrera(){
		$archivo = fopen("../data/carreras/".$_POST["facultad"]."/carreras.json", "r");
		$registros = array();
		while(($linea=fgets($archivo))){
			$registros[] = json_decode($linea, true);
		}
		return json_encode($registros);
    }
    
    public function guardarClase(){
        $respuesta = array();
        if(isset($_POST["clase"])){
            if(!file_exists("../data/carreras/".$_POST["facultad"]."/".$_POST["carrera"].".json")){
                $archivo = fopen("../data/carreras/".$_POST["facultad"]."/".$_POST["carrera"].".json", "w");
            }
            $archivo = fopen("../data/carreras/".$_POST["facultad"]."/".$_POST["carrera"].".json", "a+");
           
			$registro["carrera"] = $this->nombre;
            $registro["codigo"] = $this->cod;
            $registro["uv"] = $this->uv;
            $registro["facultad"] = $this->facu;
            $registro["carrera"] = $this->carrera;
			

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