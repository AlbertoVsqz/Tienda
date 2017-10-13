<?php 
session_start();
include 'header.php'; 

if(!isset($_SESSION['contador'])){$_SESSION['contador']=0;}
?>

<br>

<article class="bienvenida">
					
						
						<section class="cont2">
		<section class="tbcontenido2">

<form action="login.php" method="POST">
	
	
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  >
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Bienvenid@ de Vuelta!!! Por Favor ingrese los datos de su cuenta</h1><br>
				  <form>
					<input type="text" name="usuario" placeholder="Introduce tu nombre de usuario">
					<input type="text" name="contrasena" placeholder="Introduce tu contrasena">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> 
				  </div>
				</div>
			</div>
		  </div>
		  </form>

		  </section>
		  </section>
		  </article>
