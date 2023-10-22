<?php
	class partido_model{
		
		private $db;
        private $partido;
	 
		public function __construct(){
			
			$this->db = Conectar::conexion();
			$this->partido = array();
			
		}
		
		public function getPartido($id){
			
			$sql = "SELECT p.id_equipo1, e1.nombre as n1, p.id_equipo2, e2.nombre as n2, p.id as a, p.puntuacion1 as c, p.puntuacion2 as d, p.fecha as f, p.lugar as g, z.nombre as h
			FROM partido as p
			LEFT JOIN equipo as e1
			ON p.id_equipo1 = e1.id
			LEFT JOIN equipo as e2
			ON p.id_equipo2 = e2.id
            LEFT JOIN deporte as z
			ON z.id = e1.id_deporte
			WHERE p.id='$id'
			ORDER BY p.fecha ASC";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->partido[]=$filas;
			}
			return $this->partido;
			
		}
    }
?>