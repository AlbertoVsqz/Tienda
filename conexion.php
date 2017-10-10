<?php
	$conexion = mysqli_connect('localhost','root','','alberto');
	mysqli_set_charset($conexion, "UTF-8");

	/*if (!$conexion){
		die("no se ha establecido la conexion: ".mysql_connect_error());
	}else{
	echo "Se ha establecido la conexion!!!";
	}

	

	$server="localhost";
	$bd="alberto";
	$user="root";
	$pass="";

	$conexion=new mysqli($server,$user,$pass,$bd);

	if($conexion->connect_errno){
		echo "No conectado";

	}else{
		echo "Conectado";
	}
*/
	?>