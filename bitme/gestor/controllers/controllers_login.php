<?php

if(isset($_POST['ingresar'])){
	
	$ciusu = $_POST['cius'];
	$psw = MD5($_POST['pass']); 
	
	if($ciusu!="" && $psw!=""){	
	
		require("../models/conexion.php");
		
		$sql = "SELECT * FROM usuario WHERE ci ='$ciusu' AND contra ='$psw'";		
		$numfilas = mysqli_num_rows($conexionroot->query($sql));
		
		if($numfilas>0){	
						
			$sqlperfil = "SELECT * FROM usuario WHERE ci = '$ciusu'";			
			
			$resultado = $conexionroot->query($sqlperfil);
			$info = $resultado -> fetch_assoc(); 
			
			session_start();
			$_SESSION['usuario'] = $info['nombre'];
			$_SESSION['tipo'] = $info['tipo'];
			
			if($info['tipo']=="administrador"){
				
				header('location:../index.php');
				
			}else if($info['tipo']=="administrativo"){
				
				header('location:../index.php');
				
			}else if($info['tipo']=="analista"){
				
				header('location:../index.php');
				
			}else if($info['tipo']=="DT"){
				
				header('location:../index.php');
				
			}else if($info['tipo']=="juez"){
				
				header('location:../index.php');
				
			}else if($info['tipo']=="scouting"){
				
			header('location:../index.php');
			
			}
				
		}else{
			echo "<script> alert('Usuario y/o contraseña incorrectos'); window.location='../views/views_login.php' </script>";
			exit;
		}
		
	}
}

?>