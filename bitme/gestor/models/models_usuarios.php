<?php

	include("../db/db.php");

	class usuarios_model{
		
		private $db;
 
		public function __construct(){
			
			$this->db = Conectar::conexion();		
		}
		
		public function insertUsuarios($a, $b, $c, $d, $e){
			
			$sql = "INSERT INTO usuario VALUES ('$a', '$b', '$c', '$d', '$e', '1');";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function deleteUsuarios($a){
			
			$sql = "UPDATE usuario SET estado='0' WHERE ci ='$a';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function modUsuarios($ci, $a, $b, $c, $d, $e){
			
			$sql = "UPDATE usuario SET ci='$a', nombre='$b', apellido='$c', contra='$d', tipo='$e' WHERE ci ='$ci';";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}

		public function getUsuarios(){
			
			$sql = "SELECT * FROM usuario WHERE estado='1'";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){	
				$this->usuarios[]=$filas;
			}
			return $this->usuarios;
		

		}

	}
?>