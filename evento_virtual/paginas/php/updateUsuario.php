<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$email=$_POST['email'];
		$tipoid=$_POST['tipoid'];
		$identificacion=$_POST['identificacion'];
        
		if(buscaRepetido($identificacion,$conexion)==1){
			echo 2;
		}else{
			$sql="UPDATE usuarios SET tipoid='$tipoid',identificacion='$identificacion',nombre='$nombre',apellido='$apellido',email='$email' where identificacion='$identificacion'";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($identificacion,$conexion){
			$sql="SELECT * from usuarios 
				where identificacion='$identificacion'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 0;
			}else{
				return 2;
			}
		}

 ?>