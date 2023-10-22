<?php

	include("../db/db.php");

	class equipo_model{
		
		private $db;
		private $deportista;
 
		public function __construct(){
			
			$this->db = Conectar::conexion();
			$this->deportista=array();		
		}
		
		public function insertEquipos($a, $b, $c, $d){
			
			$sql = "INSERT INTO equipo(nombre, id_institucion, id_deporte, ci_dt) VALUES ('$a', '$b', '$c', '$d')";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function deleteEquipos($a){
			
			$sql = "DELETE FROM tiene WHERE id_equipo ='$a'";
			$sql1 = "DELETE FROM equipo WHERE id ='$a'";
			$this->db->query($sql);
			if($this->db->query($sql1)){
				return true;
			}else{
				return false;
			}
		}
			

		public function modEquipos($id, $a, $b, $c){
			
			$sql = "UPDATE equipo SET nombre='$a', id_deporte='$b', ci_dt='$c' WHERE id ='$id';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function getNombres(){
			
			$sql = "SELECT * FROM deportistas WHERE estado='1'";
			$consulta = $this->db->query($sql);
			while($filas=$consulta->fetch_assoc()){
				$this->deportista[]=$filas;
			}
			return $this->deportista;

			
		}

		public function insertJugadores($a,$j){
			$sql1 = "DELETE FROM tiene WHERE id_equipo ='$a'";
			$this->db->query($sql1);
			foreach($j as $jug){
				$sql = "INSERT INTO tiene VALUES ('$a', $jug)";
				$this->db->query($sql);	
			}  
			return true; 
		}

		public function getTiene(){
			
			$sql = "SELECT 	t.ci_deportistas as a, t.id_equipo as b, e.nombre as c , z.nombre as d, e.ci_dt as h FROM equipo as e, tiene as t, deportistas as d, deporte z WHERE (e.id= t.id_equipo) AND (d.ci= t.ci_deportistas) AND (e.id_deporte=z.id) ORDER BY e.nombre ASC ";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->tiene[]=$filas;
			}
			return $this->tiene;
			
		}

	

		  
	}
?>