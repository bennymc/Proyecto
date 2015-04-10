<?php
	include "includes/navbar.html";
?>
<!-- ******************** CATALOGO DE LIBROS ************************** -->
<!-- ******************** INICIA SECTION ************************** -->
	<section class="col-md-7">
	<!-- ******************** GENERO 1 ************************** -->	
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="#" onclick="CargarGenerosRandom()"><h3 class="TituloGrande" id="G1">Genero 1</h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG1">
				<a href="ejemplar.php" id="libroG1"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive"alt="Libro"></a>
				<div class="col-md-12" id="flechasG1">
					<a href="genero.php" class="pull-right">Ver mas<span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>	
  			</div>
		</div>
	<!-- ******************** GENERO 2 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G2">Genero 2</h3> </a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG2">
				<a href="ejemplar.php" id="libroG2"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
				<div class="col-md-12" id="flechasG2">
					<a href="genero.php" class="pull-right">Ver mas<span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>	
  			</div>
		</div>
	<!-- ******************** GENERO 3 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G3">Genero 3</h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG3">
				<a href="ejemplar.php" id="libroG3"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
				<div class="col-md-12" id="flechasG3">
					<a href="genero.php" class="pull-right">Ver mas<span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>	
  			</div>
		</div>
	<!-- ******************** GENERO 4 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G4">Genero 4</h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG4">
				<a href="ejemplar.php" id="libroG4"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
				<div class="col-md-12" id="flechasG4">
					<a href="genero.php" class="pull-right">Ver mas<span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>				
  			</div>
		</div>
	<!-- ******************** GENERO 5 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G5">Genero 5</h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG5">
				<a href="ejemplar.php" id="libroG5"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
				<div class="col-md-12" id="flechasG5">
					<a href="genero.php" class="pull-right">Ver mas<span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>	
  			</div>
		</div>
	</section>
<!-- ******************** FIN SECTION ************************** -->
<!-- ******************** INICIA ASIDE ************************** -->
	<aside class="col-md-3 col-md-offset-2" >
	<!-- ******************** MAS GENEROS ************************** -->	
		<div class="panel panel-success">
			<div class="panel-heading">
	    		<h3 class="TituloGrande" id="Tbrowse"> Más géneros</h3>
			</div>
			<div class="panel-body">
				<ul>
					<li><a href="genero.php">Adultos Jóvenes</a></li>
					<li><a href="genero.php">Arte</a></li>
					<li><a href="genero.php">Auto Ayuda</a></li>
					<li><a href="genero.php">Biografía</a></li>
					<li><a href="genero.php">Ciencia</a></li>
					<li><a href="genero.php">Ciencia Ficción</a></li>
					<li><a href="genero.php">Clásicos</a></li>
					<li><a href="genero.php">Comics</a></li>			
					<li><a href="genero.php">Crimen</a></li>
					<li><a href="genero.php">Fantasía</a></li>
					<li><a href="genero.php">Ficción</a></li>
					<li><a href="genero.php">Historia</a></li>
					<li><a href="genero.php">Humor</a></li>
					<li><a href="genero.php">Música</a></li>
					<li><a href="genero.php">Misterio</a></li>
					<li><a href="genero.php">Negocios</a></li>
					<li><a href="genero.php">Novelas Gráficas</a></li>
					<li><a href="genero.php">Paranormal</a></li>
					<li><a href="genero.php">Poesía</a></li>
					<li><a href="genero.php">Psicología</a></li>
					<li><a href="genero.php">Romance</a></li>
					<li><a href="genero.php">Suspenso</a></li>
					<li><a href="genero.php">Thriller</a></li>
					<li><a href="genero.php">Viajes</a></li>
				</ul>
			</div>			
		</div>
	</aside>
<!-- ******************** FIN ASIDE ************************** -->
<?php
	include "includes/footer.html";
?>
