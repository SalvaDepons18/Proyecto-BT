<?php
	class deportista_model{
		
		private $db;
        private $deportista;
	 
		public function __construct(){
			
			$this->db = Conectar::conexion();
			$this->deportista = array();
			
		}
		
		public function getDeportista($ci){
			
			$sql = "SELECT * FROM deportistas WHERE ci='$ci'";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->deportista[]=$filas;
			}
			return $this->deportista;
			
		}

    }
?>