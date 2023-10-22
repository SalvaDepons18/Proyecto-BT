<?php
	class equipo_model{
		
		private $db;
        private $equipo;
	 
		public function __construct(){
			
			$this->db = Conectar::conexion();
			$this->equipo = array();
			
		}
		
		public function getEquipo($id){
			
			$sql = "SELECT * FROM equipo WHERE id='$id'";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->equipo[]=$filas;
			}
			return $this->equipo;
			
		}
    }
?>