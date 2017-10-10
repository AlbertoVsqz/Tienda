<?php
	session_start();
	include 'header.php';
	include 'conexion.php';
?>
<article class="bienvenida">
						<hr>
						</hr>
						
						<section class="cont2">
		<section class="tbcontenido2">
			<br>
			<br>
				<section Class="tituloHabitacion" >
						<h1 >MAS INFROMACION DEL PRODUCTO</h1>
					</section>
					<br>
						<section class="contt">
			<?php				

if(!isset($_SESSION['contador'])){$_SESSION['contador']=0;}


	$peticion = ("SELECT * FROM tienda_producto WHERE idProducto='".$_GET['idproducto']."' LIMIT 1");
	$resultado = mysqli_query($conexion, $peticion) ;
	$contador=0;
	while($fila = mysqli_fetch_array($resultado)){
		$contador++;
		echo "<article class='habitaciones$contador centro' style='background:  	#669999'>";
		$peticion2 = "SELECT * FROM tienda_imgproductos WHERE idProducto=".$fila['idProducto']."";
		$resultado2=mysqli_query($conexion, $peticion2) or die (mysql_error());
	while($fila2 = mysqli_fetch_array($resultado2)){
			echo "<img src='img/".$fila2['imagen']."' width=100px id='imagen'>";

			
		}
		echo "<h1>".$fila['nombre']."</h1>";
		echo "<br>";
		echo "<h1>Precio: $".$fila['precio']."</h1>";
		echo "<br>";
		echo "<h1>Descripcion: ".$fila['descripcion']."</h1>";
		echo "<br>";
		echo "<h1>Peso: ".$fila['peso']." Kg</h1>";
		echo "<br>";
		echo "<a href='producto.php?idproducto=".$fila['idProducto']."'><button>Mas Informacion</button></a>";
		echo "<br>";
		echo "<br>";
		echo "<button value='".$fila['idProducto']."' class='botoncompra'>Comprar Ahora</button>";
		echo "<article>";
	}
	mysqli_close($conexion);
	?>
	</article>
				</section>
		</section>

