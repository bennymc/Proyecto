<?php
			include "includes/navbar.html";
?>
<!-- ***************** AUTOR **************************** -->
<!-- ***************** INICIA ASIDE IZQ **************************** -->
	<aside class="col-md-3">
		<div class="panel panel-success">
	<!-- ***************** NOMBRE Y FOTO DEL AUTOR **************************** -->
			<div class="panel-heading">
			    <h3 class="TituloGrande">AUTOR X</h3>
			</div>
			<div class="panel-body ">
			    <a href="editar.php"><img class="center-block" id="fotodeperfil" src="http://placehold.it/200x200" alt="imagen de perfil"></a>
			</div>
		</div>
	<!-- ***************** ACERCA DEL AUTOR **************************** -->		
		<div class="panel panel-success">
		  	<div class="panel-heading">
		    	 <h3 class="TituloGrande">Acerca del AUTOR X</h3>
		  	</div>
		  	<div class="panel-body">
		    	<p>Descripción del autor.</p>
		  	</div>
    	</div>	
	</aside>
	<!-- ***************** FIN ASIDE IZQ **************************** -->
	<!-- ***************** INICIA SECTION **************************** -->	
	<section class="col-md-6">
    	<div class="panel panel-success">
			<div class="panel-heading">
		     	<h1 class="Contenedoresdelibros">AUTOR X</h1>
			</div>
			<div class="panel-body" id="contenedorgenero">
			    <div class="col-md-12">
			    	<label  for="ordenar">Ordenar Libros por:</label>
				    <select id="ordenar" name="ordenar">
				      	<option value="titulo">Titulo</option>
				      	<option value="Genero">Genero</option>
				      	<option value="editorial">Editorial</option>
				      	<option value="año">Año</option>
				    </select>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="ejemplar.php" class="center-block">TITULO</a>
				</div>	
			</div>
		</div>
		<div class="flechas">
			<a href="#"><span class="glyphicon glyphicon-chevron-left"></span>Atrás</a>
	    	<a href="#" class="pull-right">Siguiente<span class="glyphicon glyphicon-chevron-right"></span></a>
	    </div>
	</section>
<!-- ***************** FIN SECTION **************************** -->
<!-- ***************** INICIA ASIDE DER **************************** -->
	<aside class="col-md-3 " >
		<div class="panel panel-success">
			<div class="panel-heading">
	    		<h3 class="panel-title" id="Tbrowse"> Más géneros</h3>
			</div>
			<div class="panel-body">
				<ul>
					<li><a href="autorGenero.php">Adultos Jóvenes</a></li>
					<li><a href="autorGenero.php">Arte</a></li>
					<li><a href="autorGenero.php">Auto Ayuda</a></li>
					<li><a href="autorGenero.php">Biografía</a></li>
					<li><a href="autorGenero.php">Ciencia</a></li>
					<li><a href="autorGenero.php">Ciencia Ficción</a></li>
					<li><a href="autorGenero.php">Clásicos</a></li>
					<li><a href="autorGenero.php">Comics</a></li>			
					<li><a href="autorGenero.php">Crimen</a></li>
					<li><a href="autorGenero.php">Fantasía</a></li>
					<li><a href="autorGenero.php">Ficción</a></li>
					<li><a href="autorGenero.php">Historia</a></li>
					<li><a href="autorGenero.php">Humor</a></li>
					<li><a href="autorGenero.php">Música</a></li>
					<li><a href="autorGenero.php">Misterio</a></li>
					<li><a href="autorGenero.php">Negocios</a></li>
					<li><a href="autorGenero.php">Novelas Gráficas</a></li>
					<li><a href="autorGenero.php">Paranormal</a></li>
					<li><a href="autorGenero.php">Poesía</a></li>
					<li><a href="autorGenero.php">Psicología</a></li>
					<li><a href="autorGenero.php">Romance</a></li>
					<li><a href="autorGenero.php">Suspenso</a></li>
					<li><a href="autorGenero.php">Thriller</a></li>
					<li><a href="autorGenero.php">Viajes</a></li>
				</ul>
			</div>			
		</div>
	</aside>
<!-- ***************** FIN ASIDE DER **************************** -->	
<?php
	include "includes/footer.html";
?>