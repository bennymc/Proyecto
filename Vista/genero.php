<?php
	include "Vista/navbar.html";
?>
<!-- ***************** GENERO **************************** -->
<!-- ***************** INICIA ASIDE IZQ **************************** -->
	<aside class="col-md-3">
		<div class="panel panel-success">
			<div class="panel-heading">
			    <h3 class="TituloGrande" id="titulo"><?php echo $this->mdl->TituloLibrero ?></h3>
			</div>
			<div class="panel-body">
			    <p id="descripcion"><?php echo $this->mdl->Descripcion ?></p>
			</div>
    	</div>
	</aside>
<!-- ***************** FIN ASIDE IZQ **************************** -->
<!-- ***************** INICIA SECTION **************************** -->	
	<section class="col-md-6">
    	<div class="panel panel-success">
			<div class="panel-heading">
		     	<h1 class="Contenedoresdelibros" id="tituloLibrero"><?php echo $this->mdl->CabeceraLibrero ?></h1>
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
					<li><a href="index.php?ctl=generos&id=1" onclick='cambiaGenero("Adultos Jóvenes")'>Adultos Jóvenes</a></li>
					<li><a href="index.php?ctl=generos&id=2" onclick='cambiaGenero("Arte")'>Arte</a></li>
					<li><a href="index.php?ctl=generos&id=3" onclick='cambiaGenero("Auto Ayuda")'>Auto Ayuda</a></li>
					<li><a href="index.php?ctl=generos&id=4" onclick='cambiaGenero("Biografía")'>Biografía</a></li>
					<li><a href="index.php?ctl=generos&id=5" onclick='cambiaGenero("Ciencia")'>Ciencia</a></li>
					<li><a href="index.php?ctl=generos&id=6" onclick='cambiaGenero("Ciencia Ficción")'>Ciencia Ficción</a></li>
					<li><a href="index.php?ctl=generos&id=7" onclick='cambiaGenero("Clásicos")'>Clásicos</a></li>
					<li><a href="index.php?ctl=generos&id=8" onclick='cambiaGenero("Comics")'>Comics</a></li>
					<li><a href="index.php?ctl=generos&id=9" onclick='cambiaGenero("Crimen")'>Crimen</a></li>
					<li><a href="index.php?ctl=generos&id=10" onclick='cambiaGenero("Fantasía")'>Fantasía</a></li>
					<li><a href="index.php?ctl=generos&id=11" onclick='cambiaGenero("Ficción")'>Ficción</a></li>
					<li><a href="index.php?ctl=generos&id=12" onclick='cambiaGenero("Historia")'>Historia</a></li>
					<li><a href="index.php?ctl=generos&id=13" onclick='cambiaGenero("Humor")'>Humor</a></li>
					<li><a href="index.php?ctl=generos&id=14" onclick='cambiaGenero("Música")'>Música</a></li>
					<li><a href="index.php?ctl=generos&id=15" onclick='cambiaGenero("Misterio")'>Misterio</a></li>
					<li><a href="index.php?ctl=generos&id=16" onclick='cambiaGenero("Negocios")'>Negocios</a></li>
					<li><a href="index.php?ctl=generos&id=17" onclick='cambiaGenero("Novelas Gráficas")'>Novelas Gráficas</a></li>
					<li><a href="index.php?ctl=generos&id=18" onclick='cambiaGenero("Paranormal")'>Paranormal</a></li>
					<li><a href="index.php?ctl=generos&id=19" onclick='cambiaGenero("Poesía")'>Poesía</a></li>
					<li><a href="index.php?ctl=generos&id=20" onclick='cambiaGenero("Psicología")'>Psicología</a></li>
					<li><a href="index.php?ctl=generos&id=21" onclick='cambiaGenero("Romance")'>Romance</a></li>
					<li><a href="index.php?ctl=generos&id=22" onclick='cambiaGenero("Suspenso")'>Suspenso</a></li>
					<li><a href="index.php?ctl=generos&id=23" onclick='cambiaGenero("Thriller")'>Thriller</a></li>
					<li><a href="index.php?ctl=generos&id=24" onclick='cambiaGenero("Viajes")'>Viajes</a></li>
				</ul>
			</div>			
		</div>
	</aside>
<!-- ***************** FIN ASIDE DER **************************** -->	
<?php
	include "Vista/footer.html";
?>