<?php
	include 'header.php';
	include 'conexion.php';
	session_start();
if(!isset($_SESSION['contador'])){$_SESSION['contador']=0;}

	$contador = 0;
	

	$peticion = "SELECT * FROM tienda_cliente WHERE usuario = '".$_POST['usuario']."' AND contrasena ='".$_POST['contrasena']."'";
	$resultado = mysqli_query($conexion, $peticion) or die (mysqli_error($conexion));
	
	while($fila = mysqli_fetch_array($resultado) ){
		$contador++;
		$_SESSION['usuario']=$fila['idCliente'];
		
	}
	if($contador > 0){
		
		$peticion = "INSERT INTO tienda_pedido VALUES('',".$_SESSION['usuario'].",'".date('Y-m-d')."','0')";
		
		$resultado = mysqli_query($conexion, $peticion);

		$peticion = "SELECT * FROM tienda_pedido WHERE idCliente = '".$_SESSION['usuario']."' ORDER BY fecha DESC LIMIT 1";
		
		$resultado =mysqli_query($conexion, $peticion);
		while ($fila = mysqli_fetch_array($resultado)){
			
			$_SESSION['idPedido']=$fila['idCliente'];
		}
		
		
		for($i=0;$i<$_SESSION['contador'];$i++){
			
			$peticion = "INSERT INTO tienda_detallepedido VALUES('','".$_SESSION['idPedido']."','".$_SESSION['producto'][$i]."','1')";
			
		$resultado = mysqli_query($conexion, $peticion);

		$peticion = "SELECT * FROM tienda_producto WHERE idProducto = '".$_SESSION['producto'][$i]."'";
		
		$resultado = mysqli_query($conexion, $peticion);
		while($fila = mysqli_fetch_array($resultado)){
			$existencias = $fila['existencias'];
			$peticiondos = "UPDATE tienda_producto SET existencias = '".($existencias-1)."' WHERE idProducto='".$_SESSION['producto'][$i]."'";
			
			$resultadodos = mysqli_query($conexion, $peticiondos);
		}

		}


		echo "<article class='bienvenida'>
						<section class='cont2'>
						<section class='tbcontenido2'>

						<hr><br><br><h1>Tu pedido se ha realizado satisfactoriamente.<h1>
						<br>
						<br>
						<a href='index.php'><button>LLEVARME AL INICIO</button></a>
				 </section>
		  		</section>
		  </article>";
		session_destroy();
		?>
		
<?php

	}else{
		echo "El usuario no existe";
		?>
		<script>window.location="confirmar.php"</script>
		<?php
	}
	mysqli_close($conexion);
	?>
