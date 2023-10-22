<?php

	include("../db/db.php");

	class deportista_model{
		
		private $db;
 
		public function __construct(){
			
			$this->db = Conectar::conexion();		
		}
		
		public function insertDeportista($a, $b, $c, $d, $e, $f, $g){
			
			$sql = "INSERT INTO deportistas VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', 1);";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function deleteDeportista($a){
			
			$sql = "UPDATE deportistas SET estado='0' WHERE ci ='$a';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function modDeportista($ci, $a, $b, $c, $d, $e, $f, $g){
			
			$sql = "UPDATE `deportistas` SET `ci` = '$a', `nombre` = '$b', `apellido` = '$c', `edad` = '$d', `fecha_ficha_medica` = '$e', `numero_camiseta` = '$f', `id_institucion` = '$g' WHERE `deportistas`.`ci` = '$ci';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function getDeportista(){
			
			$sql = "SELECT * FROM deportistas WHERE estado='1'";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){	
				$this->deportistas[]=$filas;
			}
			return $this->deportistas;
			
		}

		public function getDeportistaVencido(){
			
			$sql = "SELECT * FROM deportistas WHERE fecha_ficha_medica<CURRENT_DATE";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){	
				$this->deportista[]=$filas;
			}
			return $this->deportista;
			
		}
	}
?>