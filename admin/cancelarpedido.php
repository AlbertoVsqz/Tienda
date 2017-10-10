<?php
	
	include '../conexion.php';
	mysqli_set_charset($conexion, "UTF-8");
$peticion = "UPDATE tienda_pedido SET estado=2 WHERE  idPedido = '".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);
mysqli_close($conexion);
?>
<script>window.location="pedidos.php"</script>
?>