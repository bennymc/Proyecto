<?php
	include "includes/navbar.html";
?>
<script type="text/javascript">
    	CargarGenerosRandom();
</script>
<!-- ******************** CATALOGO DE LIBROS ************************** -->
<!-- ******************** INICIA SECTION ************************** -->
	<section class="col-md-7">
	<!-- ******************** GENERO 1 ************************** -->	
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php" ><h3 class="TituloGrande" id="G1"></h3></a>
    			<a href="genero.php" ><h3 class="TituloGrande" id="G1"></h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG1">
				<a href="ejemplar.php" id="libroG1"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive"alt="Libro"></a>
				
  			</div>
		</div>
	<!-- ******************** GENERO 2 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G2"></h3> </a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG2">
				<a href="ejemplar.php" id="libroG2"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
				
  			</div>
		</div>
	<!-- ******************** GENERO 3 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G3"></h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG3">
				<a href="ejemplar.php" id="libroG3"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
					
  			</div>
		</div>
	<!-- ******************** GENERO 4 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G4"></h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG4">
				<a href="ejemplar.php" id="libroG4"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
								
  			</div>
		</div>
	<!-- ******************** GENERO 5 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G5"></h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG5">
				<a href="ejemplar.php" id="libroG5"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
				
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
					<li><a href="genero.php?genero=Adultos Jóvenes">Adultos Jóvenes</a></li>
					<li><a href="genero.php?genero=Arte">Arte</a></li>
					<li><a href="genero.php?genero=Auto Ayuda">Auto Ayuda</a></li>
					<li><a href="genero.php?genero=Biografía">Biografía</a></li>
					<li><a href="genero.php?genero=Ciencia">Ciencia</a></li>
					<li><a href="genero.php?genero=Ciencia Ficción">Ciencia Ficción</a></li>
					<li><a href="genero.php?genero=Clásicos">Clásicos</a></li>
					<li><a href="genero.php?genero=Comics">Comics</a></li>			
					<li><a href="genero.php?genero=Crimen">Crimen</a></li>
					<li><a href="genero.php?genero=Fantasía">Fantasía</a></li>
					<li><a href="genero.php?genero=Ficción">Ficción</a></li>
					<li><a href="genero.php?genero=Historia">Historia</a></li>
					<li><a href="genero.php?genero=Humor">Humor</a></li>
					<li><a href="genero.php?genero=Música">Música</a></li>
					<li><a href="genero.php?genero=Misterio">Misterio</a></li>
					<li><a href="genero.php?genero=Negocios">Negocios</a></li>
					<li><a href="genero.php?genero=Novelas Gráficas">Novelas Gráficas</a></li>
					<li><a href="genero.php?genero=Paranormal">Paranormal</a></li>
					<li><a href="genero.php?genero=Poesía">Poesía</a></li>
					<li><a href="genero.php?genero=Psicología">Psicología</a></li>
					<li><a href="genero.php?genero=Romance">Romance</a></li>
					<li><a href="genero.php?genero=Suspenso">Suspenso</a></li>
					<li><a href="genero.php?genero=Thriller">Thriller</a></li>
					<li><a href="genero.php?genero=Viajes">Viajes</a></li>
				</ul>
			</div>			
		</div>
	</aside>
<!-- ******************** FIN ASIDE ************************** -->
<?php
	include "includes/footer.html";
?>
