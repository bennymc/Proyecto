<?php
	include "includes/navbar.html";
?>
<!-- ****************************** INICIA ASIDE ***************************************** -->
    <aside class="col-md-3">
    <!-- ****************************** FOTO Y NOMBRE EN PERFIL ************************************* -->
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil">Tu Nombre aqui</h1>
			</div>
			<div class="panel-body ">
			    <a href="editar.php"><img class="center-block" id="fotodeperfil" src="http://placehold.it/200x200" alt="imagen de perfil"></a>
			</div>
    	</div>	
    <!-- ****************************** LIBRO DESTACADO ************************************* -->
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil">Libro Destacado</h1>
			</div>
			<div class="panel-body ">
			    <a href="ejemplar.php"><img class="center-block" id="librodestacado" src="http://placehold.it/200x300" alt="Libro Destacado"></a>
			</div>
    	</div>	
    <!-- ****************************** DESCRIPCION ************************************* -->	
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil">Descripcion</h1>
			</div>
			<div class="panel-body ">
			    <p>Cosas sobre ti.</p>
			</div>
    	</div>
    <!-- ****************************** BOTON EDITAR PERFIL ****************************** -->
    	<a href="editar.php"><button type="button" class="btn btn-info center-block" id="editarperfil">EDITAR PERFIL</button></a>	
    </aside>
<!-- ************************************* FIN ASIDE ************************************* -->
<!-- ************************************* INICIO SECTION ******************************** -->
    <section class="col-md-8 col-md-offset-1">
    <!-- ************************************* LIBRERO ******************************** -->	
    	<div class="panel panel-success">
		  	<div class="panel-heading">
		    	<h1 class="Contenedoresdelibros">LIBRERO</h1>
		  	</div>
		  	<div class="panel-body"> 
			    <div class="col-md-12">
			    	<label  for="ordenar">Ordenar Libros por:</label>
				    <select id="ordenar" name="ordenar">
				      <option value="titulo">Titulo</option>
				      <option value="autor">Autor</option>
				      <option value="editorial">Editorial</option>
				      <option value="año">Año</option>
				    </select>
				</div>
				<div class="col-md-12">
					<p> Todos los libros que el usuario agrega.<br><br></p>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
				 	<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="librosencontenedor">
						<p>TITULO</p>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
				</div>				
			</div>
		</div>
		<div class="flechas">
			<a href="#"><span class="glyphicon glyphicon-chevron-left"></span>Atrás</a>
	    	<a href="#" class="pull-right">Siguiente<span class="glyphicon glyphicon-chevron-right"></span></a>
	    </div>
    </section>
<!-- ************************************* FIN SECTION ************************************* -->
<?php
	include "includes/footer.html";
?>


	
