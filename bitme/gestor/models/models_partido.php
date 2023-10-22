<?php

	include("../db/db.php");

	class partido_model{
		
		private $db;
 
		public function __construct(){
			
			$this->db = Conectar::conexion();
		}
    
		public function insertPartido($a, $b, $c, $d, $e, $f, $g){

				$sql = "INSERT INTO partido (id_equipo1, id_equipo2, puntuacion1, puntuacion2, fecha, lugar, id_deporte) VALUE ('$a', '$b', '$c', '$d', '$e', '$f', '$g');";
				if($this->db->query($sql)){
				return true;
				}else{
				return false;
				}
			}

		public function deletePartido($a){
			
			$sql = "DELETE FROM partido WHERE id ='$a';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function modPartido($id, $a, $b, $c, $d, $e, $f, $g){
			
			$sql = "UPDATE partido SET id_equipo1='$a', id_equipo2='$b', puntuacion1='$c', puntuacion2='$d', fecha='$e', lugar='$f', id_deporte='$g' WHERE partido.id='$id'";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

        public function getPartido(){
			
			$sql = "SELECT p.id_equipo1, e1.nombre as n1, p.id_equipo2, e2.nombre as n2, p.id as a, p.puntuacion1 as c, p.puntuacion2 as d, p.fecha as f, p.lugar as g, z.nombre as h
			FROM partido as p
			LEFT JOIN equipo as e1
			ON p.id_equipo1 = e1.id
			LEFT JOIN equipo as e2
			ON p.id_equipo2 = e2.id
            LEFT JOIN deporte as z
			ON z.id = e1.id_deporte
			ORDER BY p.fecha ASC";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){	
				$this->partidos[]=$filas;
			}
			return $this->partidos;
			
		}

		public function getPartido2022(){
			
			$sql = "SELECT p.id_equipo1, e1.nombre as n1, p.id_equipo2, e2.nombre as n2, p.id as a, p.puntuacion1 as c, p.puntuacion2 as d, p.fecha as f, p.lugar as g, z.nombre as h
			FROM partido as p
			LEFT JOIN equipo as e1
			ON p.id_equipo1 = e1.id
			LEFT JOIN equipo as e2
			ON p.id_equipo2 = e2.id
            LEFT JOIN deporte as z
			ON z.id = e1.id_deporte
			WHERE (YEAR(p.fecha)='2022' AND p.fecha<=CURRENT_DATE) 
			ORDER BY p.fecha ASC";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){	
				$this->partidos1[]=$filas;
			}
			return $this->partidos1;
			
		}
	}
?>    