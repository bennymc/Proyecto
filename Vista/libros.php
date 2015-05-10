<?php
	include "Vista/navbar.html";
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
				<a href="?ctl=ejemplar" id="libroG1"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive"alt="Libro"></a>
				
  			</div>
		</div>
	<!-- ******************** GENERO 2 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G2"></h3> </a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG2">
				<a href="?ctl=ejemplar" id="libroG2"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
				
  			</div>
		</div>
	<!-- ******************** GENERO 3 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G3"></h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG3">
				<a href="?ctl=ejemplar" id="libroG3"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
					
  			</div>
		</div>
	<!-- ******************** GENERO 4 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G4"></h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG4">
				<a href="?ctl=ejemplar" id="libroG4"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
								
  			</div>
		</div>
	<!-- ******************** GENERO 5 ************************** -->		
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<a href="genero.php"><h3 class="TituloGrande" id="G5"></h3></a>
  			</div>
  			<div class="panel-body librosSeparados" id="contenedorG5">
				<a href="?ctl=ejemplar" id="libroG5"><img src="http://placehold.it/100x150" class="imagenGenero img-responsive" alt="Libro"></a>
				
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
					<li><a href="?ctl=generos&id=1" onclick='cambiaGenero("Adultos Jóvenes")'>Adultos Jóvenes</a></li>
					<li><a href="?ctl=generos&id=2" onclick='cambiaGenero("Arte")'>Arte</a></li>
					<li><a href="?ctl=generos&id=3" onclick='cambiaGenero("Auto Ayuda")'>Auto Ayuda</a></li>
					<li><a href="?ctl=generos&id=4" onclick='cambiaGenero("Biografía")'>Biografía</a></li>
					<li><a href="?ctl=generos&id=5" onclick='cambiaGenero("Ciencia")'>Ciencia</a></li>
					<li><a href="?ctl=generos&id=6" onclick='cambiaGenero("Ciencia Ficción")'>Ciencia Ficción</a></li>
					<li><a href="?ctl=generos&id=7" onclick='cambiaGenero("Clásicos")'>Clásicos</a></li>
					<li><a href="?ctl=generos&id=8" onclick='cambiaGenero("Comics")'>Comics</a></li>
					<li><a href="?ctl=generos&id=9" onclick='cambiaGenero("Crimen")'>Crimen</a></li>
					<li><a href="?ctl=generos&id=10" onclick='cambiaGenero("Fantasía")'>Fantasía</a></li>
					<li><a href="?ctl=generos&id=11" onclick='cambiaGenero("Ficción")'>Ficción</a></li>
					<li><a href="?ctl=generos&id=12" onclick='cambiaGenero("Historia")'>Historia</a></li>
					<li><a href="?ctl=generos&id=13" onclick='cambiaGenero("Humor")'>Humor</a></li>
					<li><a href="?ctl=generos&id=14" onclick='cambiaGenero("Música")'>Música</a></li>
					<li><a href="?ctl=generos&id=15" onclick='cambiaGenero("Misterio")'>Misterio</a></li>
					<li><a href="?ctl=generos&id=16" onclick='cambiaGenero("Negocios")'>Negocios</a></li>
					<li><a href="?ctl=generos&id=17" onclick='cambiaGenero("Novelas Gráficas")'>Novelas Gráficas</a></li>
					<li><a href="?ctl=generos&id=18" onclick='cambiaGenero("Paranormal")'>Paranormal</a></li>
					<li><a href="?ctl=generos&id=19" onclick='cambiaGenero("Poesía")'>Poesía</a></li>
					<li><a href="?ctl=generos&id=20" onclick='cambiaGenero("Psicología")'>Psicología</a></li>
					<li><a href="?ctl=generos&id=21" onclick='cambiaGenero("Romance")'>Romance</a></li>
					<li><a href="?ctl=generos&id=22" onclick='cambiaGenero("Suspenso")'>Suspenso</a></li>
					<li><a href="?ctl=generos&id=23" onclick='cambiaGenero("Thriller")'>Thriller</a></li>
					<li><a href="?ctl=generos&id=24" onclick='cambiaGenero("Viajes")'>Viajes</a></li>
				</ul>
			</div>			
		</div>
	</aside>
<!-- ******************** FIN ASIDE ************************** -->
<?php
	include "Vista/footer.html";
?>
