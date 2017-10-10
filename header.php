<html lang="es">
	<head>
		<title>Tienda</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/js.js"></script>


		<link rel="stylesheet"  type="text/css" href="css/style.css">
		
		
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script>

			//intervalo tiempo cambio img slide, 5 segundos, se llama a la función "avanzaSlide()"
		setInterval('avanzaSlide()',4000);

		//array con las clases para las diferentes imagenes
		var arrayImagenes = new Array(".img1",".img2",".img3",".img4");

		//variable que nos permitirá saber qué imagen se está mostrando
		var contador = 0;

		//hace un efecto fadeIn para mostrar una imagen
		function mostrar(img){
			$(img).ready(function(){				
				$(arrayImagenes[contador]).fadeIn(1500);		
			});
		}

		//hace un efecto fadeOut para ocultar una imagen
		function ocultar(img){
			$(img).ready(function(){				
				$(arrayImagenes[contador]).fadeOut(1500);		
			});
		}

		//función principal
		function avanzaSlide(){
				//se oculta la imagen actual
			ocultar(arrayImagenes[contador]);
				//aumentamos el contador en una unidad
			contador = (contador + 1) % 4;
				//mostramos la nueva imagen
			mostrar(arrayImagenes[contador]);
		}
		
		
		
		
		
		</script> 


	</head>
	<body>
		
		<div class="slide">
		 <figure>

	         <img class="img1" alt="alt img1" src="img/banner.png" />
	          <img class="img2" alt="alt img2" src="img/banner2.jpg" />
	          <img class="img3" alt="alt img3" src="img/banner3.jpg" />
			  <img class="img4" alt="alt img4" src="img/banner4.jpg" />
	    </figure>
	    </div>

    <section class="contenedor">
			<!--banner-->
			
		<header class="menu">
			
			
				<!--menu-->
				
				<nav>
						<ul class="menus">
							<li class="men"><a href="index.php">Portatiles</a>
								
							</li>
							<li class="men"><a href="index.php?categoria=monitor">Monitores</a>
								
							</li>
							<li class="men"><a href="index.php?categoria=mouse">Mouse</a>
							  
							</li>
							<li class="men"><a href="index.php?categoria=teclado">Teclados</a>
								
							</li>
							<li class="men"><a href="index.php?categoria=memorias">Memorias</a>
								
							</li>
							<li class="men"><a href="index.php?categoria=ups">UPS</a>
								
							</li>
						  </ul>
					</nav>
					
					
			
		</header>
			
		</section>


<section class="cont1">
			
			<br>
				<section class="tbcontenido1">
				<section class="promocion">
		
		<div id="contienecarrito" style="background: rgb(200,200,200); color:black;">
			<a href="index.php"><h1>SU CARRITO DE COMPRA</h1></a>
			
			
				<div id="carrito" >
					
					Carrito
				</div>
				<a href="destruir.php" ><button>Vaciar carrito</button></a>
				<br>
				<br>
				<a href="confirmar.php" style="color: #ADFF2F"> <button>Confirmar compra</button></a>
			</div>
		</section>
		
		
				
	</body>
	</html>