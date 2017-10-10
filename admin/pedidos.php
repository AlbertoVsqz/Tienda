
<?php
include 'headeradmin.php';
	include '../conexion.php';

?><section class="ContNoso">
			<br>
			<br>
			<br>
							
			
				
				<section class="contNosotros">
					<article class="nosotros" >

					<table border=1>
<?php
	
	mysqli_set_charset($conexion, "UTF-8");
	$peticion = "SELECT tienda_pedido.idPedido AS idPedido,fecha,estado,nombre,apellidos FROM tienda_pedido LEFT JOIN tienda_cliente ON tienda_pedido.idCliente = tienda_cliente.idCliente ORDER BY  estado,fecha ASC";
	$resultado = mysqli_query($conexion, $peticion);



	while($fila = mysqli_fetch_array($resultado)){
		$estado = $fila['estado'];
		switch ($estado) {
			case 0:$diestado="No Enviado";break;
			case 1:$diestado="Enviado";break;
			case 2:$diestado="Anulado";break;
		}
		echo '<tr';
		switch ($estado) {
			case 0:echo' style="background:rgb(255,200,200);"';break;
			case 1:echo' style="background:rgb(200,255,200);"';break;
			case 2:echo' style="background:rgb(255,255,200);"';break;
		}
		echo'> <td>'.$fila['nombre']." ".$fila['apellidos'].'</td>
		<td>'.$diestado.'</td><td><a href="gestionpedido.php?id='.$fila['idPedido'].'"><button>Gestionar</button></a></td>
		<td><a href="pedidoservido.php?id='.$fila['idPedido'].'"><button>Pedido Enviado</button></a></td>
		<td><a href="cancelarpedido.php?id='.$fila['idPedido'].'"><button>Cancelar Pedido</button></a></td>
		</tr>';

	}
	mysqli_close($conexion);

?>
</table>

</article>
</section>
</section>
