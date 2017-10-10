<html lang="es">
	<head>
		<title>Tienda</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<script type="text/javascript" src="../js/js.js"></script>


		<link rel="stylesheet"  type="text/css" href="../css/style.css">
		
		
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

	         <img class="img1" alt="alt img1" src="../img/banner.png" />
	          <img class="img2" alt="alt img2" src="../img/banner2.jpg" />
	          <img class="img3" alt="alt img3" src="../img/banner3.jpg" />
			  <img class="img4" alt="alt img4" src="../img/banner4.jpg" />
	    </figure>
	    </div>

    <section class="contenedor">
			<!--banner-->
			
		<header class="menu">
			
			
				<!--menu-->
				
				<nav >
						<ul class="menus" >
							<li class="men"><a href='pedidos.php'>Gestionar Pedidos </a>
							</li>
							<li class="men"><a href='#'>Gestionar Clientes </a>
							</li>
							<li class="men"><a href='#'>Gestionar Productos </a>
							</li>
							<li class="men"><a href='../index.php'>SALIR </a>
							</li>
													  </ul>
					</nav>
					
					
			
		</header>
			
		</section>



		
				
	</body>
	</html>