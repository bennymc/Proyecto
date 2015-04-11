<?php
	include "includes/navbar.html";
?>
<script type="text/javascript">
    	LibrosPopulares();
    	cargarReseñas();
</script>
<!--  ***************************** INICIA SECTION ***************************** -->
	<section class="col-md-7">
	<!--  ***************************** LIBROS POPULARES ***************************** -->
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<h3 class="TituloGrande">Libros Populares.</h3>
  			</div>
  			<div id="destacados" class="panel-body">   				
				<a href="ejemplar.php" id="libroD"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	
  			</div>
		</div>
	<!--  ***************************** ULTIMAS RESEÑAS ***************************** -->
		<div class="panel panel-success">
  			<div class="panel-heading">
   				 <h3 class="TituloGrande">Ultimas Reseñas.</h3>
  			</div>
  			<div class="panel-body" id="ultimasreview">
   				<div class="col-md-4" id="reseña">
				    <div class="ec-stars-wrapper col-md-12">
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
					<div class="form-group">
					  <a href="usuario.php"><h4 class="col-md-12"></h4></a>
					  <a href="ejemplar.php"><h4 class="col-md-12"></h4></a>
					  <div class="col-md-10">                     
					    <textarea readonly class="form-control" name="texto1"></textarea>
					  </div>
					</div>
	    		</div>
  			</div>
		</div>		
	<!--  ***************************** SUGERENCIAS ***************************** -->		
		<div class="alert alert-dismissible alert-success">
			<form class="form-horizontal">
				<fieldset>
					<legend>¿No encontraste un Libro? ¡Sugiérelo!</legend>
					<div class="form-group">
					  	<label class="col-md-4 control-label" for="Email">Email</label>  
					  	<div class="col-md-5">
					  		<input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md" required="">    
					  	</div>
					</div>
					<div class="form-group">
					  	<label class="col-md-4 control-label" for="Titulo">Titulo:</label>  
					  	<div class="col-md-5">
					  		<input id="Titulo" name="Titulo" type="text" placeholder="Titulo" class="form-control input-md" required="">    
					  	</div>
					</div>
					<div class="form-group">
					  	<label class="col-md-4 control-label" for="Autor">Autor:</label>  
					  	<div class="col-md-5">
					  		<input id="Autor" name="Autor" type="text" placeholder="Autor" class="form-control input-md" required="">    
					  	</div>
					</div>
					<div class="form-group">
					  	<label class="col-md-4 control-label" for="comentarios">Comentarios:</label>
					  	<div class="col-md-5">                     
					    	<textarea class="form-control" id="comentarios" name="Comentarios"></textarea>
					  	</div>
					</div>
					<div class="form-group">
						<div class="col-md-9">
							<button type="submit" class="btn btn-default pull-right">Enviar</button>
						</div>
					</div>	
				</fieldset>
			</form>			
		</div>
	</section>
<!--  ***************************** FIN SECTION ***************************** -->
<!--  ***************************** INICIO ASIDE **************************** -->	
	<aside class="col-md-4 col-md-offset-1" >
	<!--  ***************************** FORM PARA INICIO DE SESION **************************** -->
		<div class="panel panel-success">
			<div class="panel-heading">
	    		<h3 class="TituloGrande"> Inicia Sesion:</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="usuario" class="col-md-4 control-label" id="usuario" >Usuario:</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="usuario" placeholder="USUARIO">
						</div>
					</div>
					<div class="form-group">
					    <label for="pass" class="col-md-4 control-label" id="pass">Contraseña:</label>
					    <div class="col-md-8">
					    	<input type="password" class="form-control" id="pass" placeholder="CONTRASEÑA">
						</div>			      
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<button type="submit" class="btn btn-default pull-right">Entrar</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">	
							<a href="recupera.php" class="btn btn-link" id="recuperar">Recuperar contraseña</a>
							<a href="registro.php" class="btn btn-link pull-right" id="registro">Registro</a>
						</div>
					</div>
				</form>
			</div>			
		</div>
	</aside>
<!--  ***************************** FIN ASIDE ***************************** -->
<?php
	include "includes/footer.html";
?>

