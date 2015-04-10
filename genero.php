<?php
	include "includes/navbar.html";
	$genero = $_GET["genero"];
?>
<script type="text/javascript">
		var genero = "<?php echo $genero; ?>";
		$(document).ready(function(){
    	cambiaGenero(genero);
		});
</script>
<!-- ***************** GENERO **************************** -->
<!-- ***************** INICIA ASIDE IZQ **************************** -->
	<aside class="col-md-3">
		<div class="panel panel-success">
			<div class="panel-heading">
			    <h3 class="TituloGrande" id="titulo">Genero X</h3>
			</div>
			<div class="panel-body">
			    <p id="descripcion">Descripción del género.</p>
			</div>
    	</div>
	</aside>
<!-- ***************** FIN ASIDE IZQ **************************** -->
<!-- ***************** INICIA SECTION **************************** -->	
	<section class="col-md-6">
    	<div class="panel panel-success">
			<div class="panel-heading">
		     	<h1 class="Contenedoresdelibros" id="tituloLibrero">GENERO X</h1>
			</div>
			<div class="panel-body" id="contenedorgenero">
			    <div class="col-md-12">
			    	<label  for="ordenar">Ordenar Libros por:</label>
				    <select id="ordenar" name="ordenar">
				      	<option value="titulo">Titulo</option>
				      	<option value="autor">Autor</option>
				      	<option value="editorial">Editorial</option>
				      	<option value="año">Año</option>
				    </select>
				</div>
				<div class="col-md-3" id="libro1">				 	
				 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" class="center-block imagenL img-responsive" alt="Libro" ></a>
				 	<a href="ejemplar.php" class="center-block tituloLibro">TITULO</a>
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
					<li><a href="#" onclick='cambiaGenero("Adultos Jóvenes")'>Adultos Jóvenes</a></li>
					<li><a href="#" onclick='cambiaGenero("Arte")'>Arte</a></li>
					<li><a href="#" onclick='cambiaGenero("Auto Ayuda")'>Auto Ayuda</a></li>
					<li><a href="#" onclick='cambiaGenero("Biografía")'>Biografía</a></li>
					<li><a href="#" onclick='cambiaGenero("Ciencia")'>Ciencia</a></li>
					<li><a href="#" onclick='cambiaGenero("Ciencia Ficción")'>Ciencia Ficción</a></li>
					<li><a href="#" onclick='cambiaGenero("Cine")'>Cine</a></li>
					<li><a href="#" onclick='cambiaGenero("Clásicos")'>Clásicos</a></li>
					<li><a href="#" onclick='cambiaGenero("Comics")'>Comics</a></li>
					<li><a href="#" onclick='cambiaGenero("Contemporaneo")'>Contemporaneo</a></li>
					<li><a href="#" onclick='cambiaGenero("Cocina")'>Cocina</a></li>					
					<li><a href="#" onclick='cambiaGenero("Crimen")'>Crimen</a></li>
					<li><a href="#" onclick='cambiaGenero("Deportes")'>Deportes</a></li>
					<li><a href="#" onclick='cambiaGenero("Espiritualidad")'>Espiritualidad</a></li>
					<li><a href="#" onclick='cambiaGenero("Fantasía")'>Fantasía</a></li>
					<li><a href="#" onclick='cambiaGenero("Ficción")'>Ficción</a></li>
					<li><a href="#" onclick='cambiaGenero("Ficción Historica")'>Ficción Historica</a></li>
					<li><a href="#" onclick='cambiaGenero("Filosofía")'>Filosofía</a></li>
					<li><a href="#" onclick='cambiaGenero("Historia")'>Historia</a></li>
					<li><a href="#" onclick='cambiaGenero("Humor")'>Humor</a></li>
					<li><a href="#" onclick='cambiaGenero("Manga")'>Manga</a></li>
					<li><a href="#" onclick='cambiaGenero("Música")'>Música</a></li>
					<li><a href="#" onclick='cambiaGenero("Misterio")'>Misterio</a></li>
					<li><a href="#" onclick='cambiaGenero("Negocios")'>Negocios</a></li>
					<li><a href="#" onclick='cambiaGenero("No Ficción")'>No Ficción</a></li>
					<li><a href="#" onclick='cambiaGenero("Novelas Gráficas")'>Novelas Gráficas</a></li>
					<li><a href="#" onclick='cambiaGenero("Paranormal")'>Paranormal</a></li>
					<li><a href="#" onclick='cambiaGenero("Poesía")'>Poesía</a></li>
					<li><a href="#" onclick='cambiaGenero("Psicología")'>Psicología</a></li>
					<li><a href="#" onclick='cambiaGenero("Religión")'>Religión</a></li>
					<li><a href="#" onclick='cambiaGenero("Romance")'>Romance</a></li>
					<li><a href="#" onclick='cambiaGenero("Suspenso")'>Suspenso</a></li>
					<li><a href="#" onclick='cambiaGenero("Thriller")'>Thriller</a></li>
					<li><a href="#" onclick='cambiaGenero("Viajes")'>Viajes</a></li>
				</ul>
			</div>			
		</div>
	</aside>
<!-- ***************** FIN ASIDE DER **************************** -->	
<?php
	include "includes/footer.html";
?>