<?php

	include("../db/db.php");

	class institucion_model{
		
		private $db;
 
		public function __construct(){
			
			$this->db = Conectar::conexion();
		}
    
		public function insertInstitucion($a){
			
			$sql = "INSERT INTO institucion (nombre) VALUE ('$a');";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function deleteInstitucion($a){
			
			$sql = "DELETE FROM institucion WHERE id ='$a';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function modInstitucion($id, $a){
			
			$sql = "UPDATE institucion SET nombre='$a' WHERE institucion.id='$id';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

        public function getInstitucion(){
			
			$sql = "SELECT z.nombre as a, i.id as b, i.nombre as c FROM institucion as i, equipo as e, deporte as z WHERE (i.id=e.id_institucion) AND (z.id=e.id_deporte) ORDER BY i.nombre";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){	
				$this->instituciones[]=$filas;
			}
			return $this->instituciones;
			
		}
	}
?>    