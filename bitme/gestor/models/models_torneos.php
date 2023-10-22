<?php

	include("../db/db.php");

	class torneo_model{
		
		private $db;
		private $equipos;
 
		public function __construct(){
			
			$this->db = Conectar::conexion();
			$this->equipos=array();		
		}
		
		public function insertTorneos($a, $b, $c, $d){
			
			$sql = "INSERT INTO torneo(nombre, fecha_inicio, fecha_fin, id_deporte) VALUES ('$a', '$b', '$c', '$d')";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function deleteTorneos($a){
			
			$sql = "DELETE FROM torneo_tiene WHERE id_torneo ='$a'";
			$sql1 = "DELETE FROM torneo WHERE id ='$a'";
			$this->db->query($sql);
			if($this->db->query($sql1)){
				return true;
			}else{
				return false;
			}
		}

		public function modTorneos($id, $a, $b, $c, $d){
			
			$sql = "UPDATE torneo SET nombre='$a', fecha_inicio='$b', fecha_fin='$c', id_deporte='$d' WHERE id ='$id'";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function insertEquipos($a,$j){
			$sql1 = "DELETE FROM torneo_tiene WHERE id_torneo ='$a'";
			$this->db->query($sql1);
			foreach($j as $jug){
				$sql = "INSERT INTO torneo_tiene VALUES ('$a', $jug)";
				$this->db->query($sql);	
			}  
			return true; 
		}

		public function getEquipos(){
			
			$sql = "SELECT * FROM equipo";
			$consulta = $this->db->query($sql);
			while($filas=$consulta->fetch_assoc()){
				$this->equipo[]=$filas;
			}
			return $this->equipo;

			
		}

		public function getTiene(){
			
			$sql = "SELECT	t.id_equipo as a, t.id_torneo as b, e.nombre as c , z.nombre as d, o.nombre as f, o.fecha_inicio as g, o.fecha_fin as h FROM equipo as e, torneo as o, torneo_tiene as t, deporte as z WHERE (o.fecha_fin>=CURRENT_DATE) AND (e.id= t.id_equipo) AND (o.id=t.id_torneo) AND (z.id=e.id_deporte)";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->tiene[]=$filas;
			}
			return $this->tiene;
			
		}
	}
?>