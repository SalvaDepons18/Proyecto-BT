<?php

	include("../db/db.php");

	class incidencias_model{
		
		private $db;
 
		public function __construct(){
			
			$this->db = Conectar::conexion();		
		}
		
		public function insertIncidencia($a, $b, $c, $d, $e, $f, $g){
			
			$sql = "INSERT INTO incidencias (ci_deportista, id_partido, goles, expulsiones, faltas_rojas, faltas_amarillas, id_deporte) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g');";
			
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}
 
		public function deleteIncidencia($a){
			
			$sql = "DELETE FROM incidencias WHERE id ='$a';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function modIncidencia($id, $a, $b, $c, $d, $e, $f, $g){
			
			$sql = "UPDATE `incidencias` SET `ci_deportista` = '$a', `id_partido` = '$b', `goles` = '$c', `expulsiones` = '$d', `faltas_rojas` = '$e', `faltas_amarillas` = '$f', `id_deporte` = '$g' WHERE `id` = '$id';"; 
			if($this->db->query($sql)){	
				return true;
			}else{
				return false;
			}
		}

		public function getIncidencia(){
			
			$sql = "SELECT i.id as a, d.nombre as b, d.apellido as c, e.nombre as d, i.goles as e, i.faltas_rojas as f, i.faltas_amarillas as g, expulsiones as h, i.id_partido as i,  z.nombre as j, p.fecha as k 
			FROM incidencias as i, partido as p, tiene as t, deportistas as d, equipo as e, deporte as z
			WHERE (i.ci_deportista = d.ci) AND (t.ci_deportistas = d.ci) AND (e.id = t.id_equipo) AND (p.id = i.id_partido) AND (z.id=i.id_deporte) 
			ORDER BY z.nombre, e.nombre ASC";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){	
				$this->incidencias[]=$filas;
			}
			return $this->incidencias;
		}

       
	}
?>