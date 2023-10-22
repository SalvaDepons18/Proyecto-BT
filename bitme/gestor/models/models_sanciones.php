<?php

	include("../db/db.php");

	class sancion_model{
		
		private $db;
        private $sanciones;
 
		public function __construct(){
			
			$this->db = Conectar::conexion();
		}
    
        public function getSancion(){
			
			$sql = "SELECT * FROM sancion";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){	
				$this->sanciones[]=$filas;
			}
			return $this->sanciones;
			
		}

		public function insertSancion($a, $b, $c){
			
			$sql = "INSERT INTO sancion (ci_sancionado, tipo, fecha) VALUES ('$a', '$b', '$c');";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function deleteSancion($a){
			
			$sql = "DELETE FROM sancion WHERE id ='$a';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function modSancion($id, $a, $b, $c){
			
			$sql = "UPDATE sancion SET ci_sancionado='$a', tipo='$b', fecha='$c' WHERE sancion.id='$id';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

	}
?>    