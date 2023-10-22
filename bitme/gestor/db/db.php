<?php
	class Conectar{
		
		public static function conexion(){
			$conexionroot = new mysqli("localhost", "root", "", "bitme");
			$conexionroot->query("SET NAMES 'utf8'");
			return $conexionroot;
			
		}
	}
?>