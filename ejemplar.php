<?php
	include "includes/navbar.html";
?>
<!-- ****************************** PORTADA DEL EJEMLAR ****************************** -->
	<aside class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil">Título del Libro</h1>
			</div>
			<div class="panel-body ">
			    <a href="ejemplar.php"><img class="center-block img-responsive" id="librodestacado" src="http://placehold.it/200x300" alt="Libro Destacado"></a>
			</div>
    	</div>	
	</aside>	
<!-- ************************************* FICHA BIBLIOGRAFICA ************************************* -->	
	<section class="col-md-8" id="ficha">
		<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil">Ficha bibliográfica</h1>
			</div>
			<div class="panel-body ">
			  	<div class="col-md-4">
					<h3>Título del libro</h3>
					<p>
					  	Ejemplar1.
					</p>
					<h3>Autor</h3>
					<a href="autor.php"><p>	Autor1.	</p></a>
		  		</div>
		   		<div class="fichac  col-md-4">
		   	 		<h3>Editorial</h3>
			  		<a href="editorial.php"><p>Editorial1. </p></a>
		  	 		<h3>Año de edición</h3>
			  		<p>
			  			AñodeEdición1.
			  		</p>
			  		<h3>ISBN</h3>
			  		<p>
			  			ISBN1.
			  		</p>			  
		  		</div>
		   		<div class=" col-md-4">
					<h3>Género</h3>
			  		<a href="genero.php"><p>Género1. </p></a>
			  		<h3>Título original</h3>
			  		<p>
			  			TítuloOriginal1.
			  		</p>
		  		</div>
			</div>
		</div>
	</section>	


<!-- ************************************* BOTON AGREGAR ************************************* -->		
	
		<div class="col-md-4 col-md-offset-3">
			<button id="agregar" name="agregar" class="btn btn-default">Agregar a mi librero</button>
		</div>
	
<!-- ************************************* SINOPSIS ************************************* -->					
	<section class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading">
			    <h3 class="TituloGrande" id="sinopsis">Sinopsis</h3>
			</div>
			<div class="panel-body ">
			  	<p>
			  		Sinopsis del libro.
			  	</p>
			</div>
		</div>
	</section>	
<!-- ************************************* RESEÑAS ************************************* -->		
	<section class="col-md-12">
		<div class="panel panel-success">
		    <div class="panel-heading">
		    	<h3 class="TituloGrande">Reseñas</h3>
		    </div>
		    <div class="panel-body">
	<!-- ************************************* MI RESEÑA ************************************* -->	    	
		    	<div class="col-md-5">
				    <div class="ec-stars-wrapper col-md-12">
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
					<div class="form-group">
					  	<label class="col-md-12 control-label" for="reseña">Mi reseña</label>
					  	<div class="col-md-12">                     
					    	<textarea class="form-control" id="reseña" name="reseña"></textarea>
					  	</div>
						<div>
							<button type="submit" class="btn btn-default center-block" id="btnenviarreview">Enviar</button>
						</div>
					</div>
				</div>
	<!-- ************************************* RESEÑAS DE USUARIOS ************************************* -->		
				<div class="col-md-7" id="userreview">
				    <div class="ec-stars-wrapper col-md-12">
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
					<div class="form-group">
					  	<label class="col-md-12 control-label" for="reseña"><a href="usuario.php">Reseña de el usuario Usuario1</a></label>
					  	<div class="col-md-10">                     
					    	<textarea readonly class="form-control" id="reseña" name="reseña"></textarea>
					  	</div>
					</div>
					<div class="ec-stars-wrapper col-md-12">
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
					<div class="form-group">
					  	<label class="col-md-12 control-label" for="reseña"><a href="usuario.php">Reseña de el usuario Usuario2</a></label>
					  	<div class="col-md-10">                     
					    	<textarea readonly class="form-control" id="reseña" name="reseña"></textarea>
					  	</div>
					</div>
					<div class="ec-stars-wrapper col-md-12">
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
					<div class="form-group">
					  	<label class="col-md-12 control-label" for="reseña"><a href="usuario.php">Reseña de el usuario Usuario3</a></label>
					  	<div class="col-md-10">                     
					    	<textarea readonly class="form-control" id="reseña" name="reseña"></textarea>
					  	</div>
					</div>
					<div class="ec-stars-wrapper col-md-12">
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
					<div class="form-group">
					  	<label class="col-md-12 control-label" for="reseña"><a href="usuario.php">Reseña de el usuario Usuario4</a></label>
					  	<div class="col-md-10">                     
					    	<textarea readonly class="form-control" id="reseña" name="reseña"></textarea>
					  	</div>
					</div>
					<div class="ec-stars-wrapper col-md-12">
						<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
						<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
						<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
						<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
						<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
					</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
					<div class="form-group">
					  	<label class="col-md-12 control-label" for="reseña"><a href="usuario.php">Reseña de el usuario Usuario5</a></label>
					  	<div class="col-md-10">                     
					    	<textarea readonly class="form-control" id="reseña" name="reseña"></textarea>
					  	</div>
					</div>
					<a href="#" class="col-md-6">Siguiente<span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
		</div>
	</section>
<?php
	include "includes/footer.html";
?>