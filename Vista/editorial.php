<?php
			include "Vista/navbar.html";
?>
<!-- ***************** GENERO **************************** -->
<!-- ***************** INICIA ASIDE IZQ **************************** -->
	<aside class="col-md-3">
		<div class="panel panel-success">
			<div class="panel-heading">
			    <h3 class="TituloGrande">EDITORIAL X</h3>
			</div>
			<div class="panel-body">
			    <p>Descripción de la editorial.</p>
			</div>
    	</div>
	</aside>
<!-- ***************** FIN ASIDE IZQ **************************** -->
<!-- ***************** INICIA SECTION **************************** -->	
<section class="col-md-6">
    	<div class="panel panel-success">
			<div class="panel-heading">
		     	<h1 class="Contenedoresdelibros">EDITORIAL X</h1>
			</div>
			<div class="panel-body" id="contenedorgenero">
			    <div class="col-md-12">
			    	<label  for="ordenar">Ordenar Libros por:</label>
				    <select id="ordenar" name="ordenar">
				      	<option value="titulo">Titulo</option>
				      	<option value="autor">Autor</option>
				      	<option value="genero">Genero</option>
				      	<option value="año">Año</option>
				    </select>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
				</div>
				<div class="col-md-3">				 	
				 	<a href="?ctl=ejemplar"><img src="http://placehold.it/100x150" alt="Libro"></a>
				 	<a href="?ctl=ejemplar" class="center-block">TITULO</a>
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
					<li><a href="?ctl=editorialGenero">Adultos Jóvenes</a></li>
					<li><a href="?ctl=editorialGenero">Arte</a></li>
					<li><a href="?ctl=editorialGenero">Auto Ayuda</a></li>
					<li><a href="?ctl=editorialGenero">Biografía</a></li>
					<li><a href="?ctl=editorialGenero">Ciencia</a></li>
					<li><a href="?ctl=editorialGenero">Ciencia Ficción</a></li>
					<li><a href="?ctl=editorialGenero">Clásicos</a></li>
					<li><a href="?ctl=editorialGenero">Comics</a></li>				
					<li><a href="?ctl=editorialGenero">Crimen</a></li>
					<li><a href="?ctl=editorialGenero">Fantasía</a></li>
					<li><a href="?ctl=editorialGenero">Ficción</a></li>
					<li><a href="?ctl=editorialGenero">Historia</a></li>
					<li><a href="?ctl=editorialGenero">Humor</a></li>
					<li><a href="?ctl=editorialGenero">Música</a></li>
					<li><a href="?ctl=editorialGenero">Misterio</a></li>
					<li><a href="?ctl=editorialGenero">Negocios</a></li>
					<li><a href="?ctl=editorialGenero">Novelas Gráficas</a></li>
					<li><a href="?ctl=editorialGenero">Paranormal</a></li>
					<li><a href="?ctl=editorialGenero">Poesía</a></li>
					<li><a href="?ctl=editorialGenero">Psicología</a></li>
					<li><a href="?ctl=editorialGenero">Romance</a></li>
					<li><a href="?ctl=editorialGenero">Suspenso</a></li>
					<li><a href="?ctl=editorialGenero">Thriller</a></li>
					<li><a href="?ctl=editorialGenero">Viajes</a></li>
				</ul>
			</div>			
		</div>
	</aside>
<!-- ***************** FIN ASIDE DER **************************** -->		
<?php
	include "Vista/footer.html";
?>