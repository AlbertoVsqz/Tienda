<?php
session_start();
	include 'header.php';
	include 'conexion.php';?>

				
					<article class="bienvenida">
						<hr>
						</hr>
						
						<section class="cont2">
		<section class="tbcontenido2">
			<br>
			<br>
				<section Class="tituloHabitacion" >
						<h1 >NUESTROS PRODUCTOS</h1>
					</section>
					<br>
						<section class="contt">
							
						
						


					
<?php


if(!isset($_SESSION['contador'])){$_SESSION['contador']=0;}

if(!isset($_GET["categoria"])){
	$peticion = "SELECT * FROM tienda_producto WHERE  existencias > 0  AND categoria='portatil'";
	//echo $peticion;
}else{
	
		$peticion = "SELECT * FROM tienda_producto WHERE  existencias > 0 AND categoria='".$_GET['categoria']."'";
	//	echo $peticion;
}


	
	$resultado = mysqli_query($conexion, $peticion);
	echo "<meta charset='utf-8'>";
	$contador=0;
	while($fila = mysqli_fetch_array($resultado)){
		$contador++;
		echo "
		<article class='habitaciones$contador' style='background:  	#669999'>";
						
						

		
		if($contador=='2'){
								$contador=0;
								

							}
		$peticion2="SELECT * FROM tienda_imgproductos WHERE idProducto='".$fila['idProducto']."' LIMIT 1";
		$resultado2=mysqli_query($conexion, $peticion2) or die (mysqli_error($conexion)) ;
		while($fila2 = mysqli_fetch_array($resultado2)){
			
			echo "<img src='img/".$fila2['imagen']."' width=100px id='imagen'>

			";
							

			
		}


		echo "<h1>".$fila['nombre']."</h1>";
		echo "<h1> $ ".$fila['precio']."</h1>";


		echo "<a href='producto.php?idproducto=".$fila['idProducto']."'><button>Mas Informacion</button></a>";
		echo "<br>";
		echo "<br>";
		echo "<button value='".$fila['idProducto']."' class='botoncompra'>Comprar Ahora</button>";
		echo "</article>";
	}
	mysqli_close($conexion);
	?>
					

					</article>
				</section>
		</section>
		<?php
		include "footer.php";
		?>


	</html>