 	<?php
				include "includes/navbar.html";
	?>

	    <aside class="col-md-3">
	    	<div class="panel panel-success">
				  <div class="panel-heading">
				    <h1 class="panel-title" id="nombredeperfil">USUARIO</h1>
				  </div>
				  <div class="panel-body ">
				    <a href="editar.php"><img class="center-block" id="fotodeperfil" src="http://placehold.it/200x200" alt="imagen de perfil"></a>
				  </div>
	    	</div>	
	    	<div class="panel panel-success">
				  <div class="panel-heading">
				    <h1 class="panel-title" id="nombredeperfil">Su Libro Destacado</h1>
				  </div>
				  <div class="panel-body ">
				    <a href="ejemplar.php"><img class="center-block" id="librodestacado" src="http://placehold.it/200x300" alt="Libro Destacado"></a>
				  </div>
	    	</div>	
	    	<div class="panel panel-success">
				  <div class="panel-heading">
				    <h1 class="panel-title" id="nombredeperfil">Su Descripcion</h1>
				  </div>
				  <div class="panel-body ">
				    Cosas sobre el usuario.
				  </div>
	    	</div>
	    	
	    </aside>
	    <div class="col-md-1"></div>
	    <section class="col-md-8">
	    	<div class="panel panel-success">
				  <div class="panel-heading">
				    <h1 class="panel-title" id="librero">LIBRERO</h1>
				  </div>
				  <div class="panel-body">
				  

				    <div class="col-md-4">
				    	<label  for="ordenar">Ordenar Libros por:</label>
					    <select id="ordenar" name="ordenar">
					      <option value="titulo">Titulo</option>
					      <option value="autor">Autor</option>
					      <option value="editorial">Editorial</option>
					      <option value="año">Año</option>
					    </select>
					</div>
					 <p> Todos los libros que el usuario agrega.<br/><br/></p>
					 <div id="enlibrero" >
					 	<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					 </div>
					 <div id="enlibrero">
					 	<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					 </div>
					 <div id="enlibrero">
					 	<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					 </div>
					 <div id="enlibrero">
					 	<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					 </div>
					 <div id="enlibrero">
					 	<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					 </div>
					 <div id="enlibrero">
					 	<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					 </div>
					 <div id="enlibrero">
					 	<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					 </div>
					 <div id="enlibrero">
					 	<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					 </div>
					 <div id="enlibrero">
					 	<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					 </div>
					 <div id="enlibrero">
					 	<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					 </div>
					
					
				 </div>
			</div>
			<a href="#"><span class="glyphicon glyphicon-chevron-left"></span>Atrás</a>
	    	<a href="#" class="col-md-offset-10">Siguiente<span class="glyphicon glyphicon-chevron-right"></span></a>
	    </section>

		<?php
			include "includes/footer.html";
		?>


	
