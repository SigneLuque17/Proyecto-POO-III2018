<?php 
	class Matricula{

		private $codCarrera;
        private $codClase;
        private $seccion;

		public function __construct(
                    $codCarrera = null,
                    $codClase = null,
                    $seccion = null
        ){
			$this->codCarrera = $codCarrera;
            $this->codClase = $codClase;
            $this->seccion = $seccion;
        }
        
        public function toString(){
			return "CodCarrera: " . $this->codCarrera . 
                " CodClase: " . $this->codClase . 
                " Seccion: " . $this->seccion;
			
		}



		public function getCodCarrera(){
			return $this->codCarrera;
		}
		public function setCodCarrera($codCarrera){
			$this->codCarrera = $codCarrera;
		}
		public function getCodClase(){
			return $this->codClase;
		}
		public function setCodClase($codClase){
			$this->codClase = $codClase;
        }
        public function getSeccion(){
			return $this->seccion;
		}
		public function setSeccion($seccion){
			$this->seccion = $seccion;
		}
    
    
         public function guardarMatricula(){
            $respuesta = array();
     
        

?>
