<?php
			include "includes/navbar.html";
?>
	<aside class="col-md-3">
		<div class="panel panel-success">
				  <div class="panel-heading">
				    <h1 class="panel-title" id="nombredeperfil">AUTOR X</h1>
				  </div>
				  <div class="panel-body ">
				    <a href="editar.php"><img class="center-block" id="fotodeperfil" src="http://placehold.it/200x200" alt="imagen de perfil"></a>
				  </div>
	    	</div>	
			<div class="panel panel-success">
				  <div class="panel-heading">
				    <h1 class="panel-title" id="titulo">Acerca del Autor X</h1>
				  </div>
				  <div class="panel-body">
				    <p>Descripción del autor.</p>
				  </div>
	    	</div>	

	    	

	</aside>
	<section class="col-md-6">
	    	<div class="panel panel-success">
				  <div class="panel-heading">
				    <h1 class="panel-title" id="librero">AUTOR X</h1>
				  </div>
				  <div class="panel-body">
				  

				    <div class="col-md-4">
				    	<label  for="ordenar">Ordenar Libros por:</label>
					    <select id="ordenar" name="ordenar">
					      <option value="titulo">Titulo</option>
					      
					      <option value="editorial">Editorial</option>
					      <option value="año">Año</option>
					    </select>
					</div>
					 <p> LIBROS DEL AUTOR X<br/><br/></p>
					 <div id="enlibrero" >
					 	
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>TITULO</p>
					 </div>
					 <div id="enlibrero">
					 	
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>TITULO</p>
					 </div>
					 <div id="enlibrero">
					 	
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>TITULO</p>
					 </div>
					 <div id="enlibrero">
					 	
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>TITULO</p>
					 </div>
					 <div id="enlibrero">
					 	
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>TITULO</p>
					 </div>
					 <div id="enlibrero">
					 	
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>TITULO</p>
					 </div>
					 <div id="enlibrero">
					 	
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>TITULO</p>
					 </div>
					 <div id="enlibrero">
					 	
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>TITULO</p>
					 </div>
					 <div id="enlibrero">
					 	
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>TITULO</p>
					 </div>
					
					
					
				 </div>
			</div>
			<a href="#"><span class="glyphicon glyphicon-chevron-left"></span>Atrás</a>
	    	<a href="#" class="col-md-offset-8">Siguiente<span class="glyphicon glyphicon-chevron-right"></span></a>
	    </section>

	<aside class="col-md-3 " >
		<div class="panel panel-success">
			<div class="panel-heading">
	    		<h3 class="panel-title" id="Tbrowse"> Más géneros</h3>
			</div>
			<div class="panel-body">
				<ul>
					<li><a href="genero.php">Adultos Jóvenes</a></li>
					<li><a href="genero.php">Arte</a></li>
					<li><a href="genero.php">Auto Ayuda</a></li>
					<li><a href="genero.php">Biografía</a></li>
					<li><a href="genero.php">Ciencia</a></li>
					<li><a href="genero.php">Ciencia Ficción</a></li>
					<li><a href="genero.php">Cine</a></li>
					<li><a href="genero.php">Clásicos</a></li>
					<li><a href="genero.php">Comics</a></li>
					<li><a href="genero.php">Contemporaneo</a></li>
					<li><a href="genero.php">Cocina</a></li>					
					<li><a href="genero.php">Crimen</a></li>
					<li><a href="genero.php">Deportes</a></li>
					<li><a href="genero.php">Espiritualidad</a></li>
					<li><a href="genero.php">Fantasía</a></li>
					<li><a href="genero.php">Ficción</a></li>
					<li><a href="genero.php">Ficción Historica</a></li>
					<li><a href="genero.php">Filosofía</a></li>
					<li><a href="genero.php">Historia</a></li>
					<li><a href="genero.php">Humor</a></li>
					<li><a href="genero.php">Manga</a></li>
					<li><a href="genero.php">Música</a></li>
					<li><a href="genero.php">Misterio</a></li>
					<li><a href="genero.php">Negocios</a></li>
					<li><a href="genero.php">No Ficción</a></li>
					<li><a href="genero.php">Novelas Gráficas</a></li>
					<li><a href="genero.php">Paranormal</a></li>
					<li><a href="genero.php">Poesía</a></li>
					<li><a href="genero.php">Psicología</a></li>
					<li><a href="genero.php">Religión</a></li>
					<li><a href="genero.php">Romance</a></li>
					<li><a href="genero.php">Suspenso</a></li>
					<li><a href="genero.php">Thriller</a></li>
					<li><a href="genero.php">Viajes</a></li>
				</ul>
			</div>			
		</div>
	</aside>
<?php
	include "includes/footer.html";
?>