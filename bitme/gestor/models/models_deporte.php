<?php

	class deporte_model{
		
		private $db;
		private $deporte;
 
		public function __construct(){
			
			$this->db = Conectar::conexion();
			$this->deporte=array();		
		}
		
		public function getDeporte(){
			
			$sql = "SELECT * FROM deporte ORDER BY id ASC";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){	
				$this->deporte[]=$filas;
			}
			return $this->deporte;	
		}

        public function insertDeporte($a){
			
			$sql = "INSERT INTO deporte(nombre) VALUES ('$a')";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

        public function modDeporte($id, $a){
			
			$sql = "UPDATE deporte SET nombre='$a' WHERE id='$id';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

        public function deleteDeporte($id){
			
			$sql = "DELETE FROM deporte WHERE id='$id';";
            if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

	}
?>