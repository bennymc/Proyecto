<?php
	include "includes/navbar.html";
?>
	<section class="col-md-7">
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<h3 class="panel-title" id="grande">Libros Populares.</h3>
  			</div>
  			<div id="destacados" class="panel-body">
   				<p>Mostrara libros populares entre los  usuarios<br/></p>
				<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				
					 	
  			</div>
		</div>
		<div class="panel panel-success">
  			<div class="panel-heading">
   				 <h3 class="panel-title" id="grande">Ultimas Reseñas.</h3>
  			</div>
  			<div class="panel-body" id="ultimasreview">
   				<div class="panel-body col-md-4">
				    <div class="ec-stars-wrapper col-md-12">
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
					<div class="form-group">
					  <a href="usuario.php"><h4 class="col-md-12">Usuario: Usuario1</h4></a>
					  <a href="ejemplar.php"><h4 class="col-md-12">Título: Título1</h4></a>
					  <div class="col-md-10">                     
					    <textarea readonly class="form-control" id="reseña" name="reseña"></textarea>
					  </div>
					</div>
	    		</div>
	    		<div class="panel-body col-md-4">
				    <div class="ec-stars-wrapper col-md-12">
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
					<div class="form-group">
					  <a href="usuario.php"><h4 class="col-md-12">Usuario: Usuario2</h4></a>
					  <a href="ejemplar.php"><h4 class="col-md-12">Título: Título2</h4></a>
					  <div class="col-md-10">                     
					    <textarea readonly class="form-control" id="reseña" name="reseña"></textarea>
					  </div>
					</div>
	    		</div>
	    		<div class="panel-body col-md-4">
				    <div class="ec-stars-wrapper col-md-12">
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
					<div class="form-group">
					   <a href="usuario.php"><h4 class="col-md-12">Usuario: Usuario3</h4></a>
					  <a href="ejemplar.php"><h4 class="col-md-12">Título: Título3</h4></a>
					  <div class="col-md-10">                     
					    <textarea readonly class="form-control" id="reseña" name="reseña"></textarea>
					  </div>
					</div>
	    		</div>
  			</div>
		</div>
		
		
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
					  <div class="col-md-4">                     
					    <textarea class="form-control" id="comentarios" name="Comentarios"></textarea>
					  </div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-6">
						<button type="submit" class="btn btn-default" id="btnSugerir">Enviar</button>
						</div>

					</div>	
				</fieldset>
			</form>
			
		</div>
	</section>

	<div class="col-md-1"></div>

	<aside class="col-md-4 " >
		<div class="panel panel-success" id="contenedorlogin">
			<div class="panel-heading">
	    		<h3 class="panel-title" id="Tlogin"> Inicia Sesion:</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="usuario" class="col-lg-2 control-label" id="usuario" >Usuario:</label>
						<div class="col-lg-8">
						<input type="text" class="form-control" id="usuario" placeholder="USUARIO">
						</div>
					</div>
					<div class="form-group">
					    <label for="pass" class="col-lg-2 control-label" id="pass">Contraseña:</label>
					    <div class="col-lg-8">
					    <input type="password" class="form-control" id="pass" placeholder="CONTRASEÑA">
						</div>			      
					</div>

					<div class="form-group col-md-7">
						<div>
						<button type="submit" class="btn btn-default" id="btnlogin">Entrar</button>
						</div>

					</div>	
					<a href="recupera.php" class="btn btn-link" id="recuperar">Recuperar contraseña</a>
					<a href="registro.php" class="btn btn-link" id="registro">Registro</a>
				</form>
			</div>			
		</div>
	</aside>

<?php
	include "includes/footer.html";
?>

