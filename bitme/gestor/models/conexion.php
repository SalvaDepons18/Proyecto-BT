<?php
	$conexionroot = new mysqli('localhost', 'Administrador', '123', 'bitme');
	if ($conexionroot->connect_errno) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		exit;
	}

	$sql = "SELECT * FROM usuario WHERE ci ='$ciusu' AND contra ='$psw'";		
		$numfilas = mysqli_num_rows($conexionroot->query($sql));
		
		if($numfilas>0){	
						
			$sqlperfil = "SELECT * FROM usuario WHERE ci = '$ciusu'";			
			
			$resultado = $conexionroot->query($sqlperfil);
			$info = $resultado -> fetch_assoc(); 			
			
			if($info['tipo']=="administrador"){
				
				$conexionadministrador = new mysqli('localhost', 'Administrador', '123', 'bitme');
				if ($conexionadministrador->connect_errno) {
					echo "Lo sentimos, este sitio web está experimentando problemas.";
					exit;
				}
				
			}else if($info['tipo']=="administrativo"){
				
				$conexionadministrativo = new mysqli('localhost', 'Administrativo', '123', 'bitme');
				if ($conexionadministrativo->connect_errno) {
					echo "Lo sentimos, este sitio web está experimentando problemas.";
					exit;
				}

				
			}else if($info['tipo']=="analista"){
				
				$conexionanalista = new mysqli('localhost', 'Analista', '123', 'bitme');
				if ($conexionanalista->connect_errno) {
					echo "Lo sentimos, este sitio web está experimentando problemas.";
					exit;
				}
				
			}else if($info['tipo']=="DT"){
				
				$conexiondt = new mysqli('localhost', 'DT', '123', 'bitme');
				if ($conexiondt->connect_errno) {
					echo "Lo sentimos, este sitio web está experimentando problemas.";
					exit;
				}
				
			}else if($info['tipo']=="juez"){
				
				$conexionjuez = new mysqli('localhost', 'Juez', '123', 'bitme');
				if ($conexionjuez->connect_errno) {
					echo "Lo sentimos, este sitio web está experimentando problemas.";
					exit;
				}
				
			}else if($info['tipo']=="scouting"){
				
				$conexionscouting= new mysqli('localhost', 'Scouting', '123', 'bitme');
				if ($conexionscouting->connect_errno) {
					echo "Lo sentimos, este sitio web está experimentando problemas.";
					exit;
				}
			
			}
		}
?>