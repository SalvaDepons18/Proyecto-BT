<?php
	class deportista_model{
		
		private $db;
        private $tiene;
	 
		public function __construct(){
			
			$this->db = Conectar::conexion();
			$this->tiene = array();
			
		}
		
		public function getTiene($id){
			
			$sql = "SELECT * FROM tiene WHERE id_equipo='$id'";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->tiene[]=$filas;
			}
			return $this->tiene;
			
		}

		
    }
?>