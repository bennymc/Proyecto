<?php
	include "Vista/navbar.html";
	//$titulo = $_GET["titulo"];
?>
<script type="text/javascript">
		var titulo = "<?php echo $titulo; ?>";
		cargaTitulo(titulo);
</script>
<!-- ****************************** PORTADA DEL EJEMLAR ****************************** -->
	<aside class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil" id="tituloPerfil"></h1>
			</div>
			<div class="panel-body " >
			    <img class="center-block img-responsive" id="portadaEjemplar" src="http://placehold.it/200x300">
			</div>
    	</div>	
	</aside>	
<!-- ************************************* FICHA BIBLIOGRAFICA ************************************* -->	
	<section class="col-md-8" id="ficha">
		<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil">Ficha bibliográfica</h1>
			</div>
			<div class="panel-body " id="ficha">
			  	<div class="col-md-4">
					<h3>Título del libro</h3>
					<p id="titulo">
					</p>
					<h3>Autor</h3>
					<a href="?ctl=autor"><p id="autor">
					</p></a>
		  		</div>
		   		<div class="fichac  col-md-4">
		   	 		<h3>Editorial</h3>
			  		<a href="editorial.php"><p id="editorial"></p></a>
		  	 		<h3>Año de edición</h3>
			  		<p id="año">
			  		</p>
			  		<h3>ISBN</h3>
			  		<p id="isbn">
			  		</p>			  
		  		</div>
		   		<div class=" col-md-4">
					<h3>Género</h3>
			  		<a href="genero.php"><p id="genero"></p></a>
			  		<h3>Título original</h3>
			  		<p id="tOriginal">
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
	<!-- ************************************* MI RESEÑA ************************************* -->	    	
			<div class="panel-body">	    
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
							<button type="submit" class="btn btn-default" id="btnenviarreview">Enviar</button>
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
					  	<label class="col-md-12 control-label" for="reseña1"><a href="usuario.php">Reseña de el usuario Usuario2</a></label>
					  	<div class="col-md-10">                     
					    	<textarea readonly class="form-control" id="reseña1" name="reseña"></textarea>
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
					  	<label class="col-md-12 control-label" for="reseña2"><a href="usuario.php">Reseña de el usuario Usuario3</a></label>
					  	<div class="col-md-10">                     
					    	<textarea readonly class="form-control" id="reseña2" name="reseña"></textarea>
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
					  	<label class="col-md-12 control-label" for="reseña3"><a href="usuario.php">Reseña de el usuario Usuario4</a></label>
					  	<div class="col-md-10">                     
					    	<textarea readonly class="form-control" id="reseña3" name="reseña"></textarea>
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
					  	<label class="col-md-12 control-label" for="reseña4"><a href="usuario.php">Reseña de el usuario Usuario5</a></label>
					  	<div class="col-md-10">                     
					    	<textarea readonly class="form-control" id="reseña4" name="reseña"></textarea>
					  	</div>
					</div>
					<a href="#" class="col-md-6">Siguiente<span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
		</div>
	</section>
<?php
	include "Vista/footer.html";
?>