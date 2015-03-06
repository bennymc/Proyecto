<?php
	include "includes/navbar.html";
?>
<!-- ****************************** INICIA ASIDE ***************************************** -->
	<aside class="col-md-3">
	<!-- ****************************** FOTO Y NOMBRE EN PERFIL ************************************* -->	
		<div class="panel panel-success">
		  	<div class="panel-heading">
				<h1 class="titulosenperfil">USUARIO</h1>
			</div>
			<div class="panel-body ">
				<img class="center-block" id="fotodeperfil" src="http://placehold.it/200x200" alt="imagen de perfil">
			</div>
		  	<div>
				<div class="bs-example">
				    <!-- Button HTML (to Trigger Modal) -->
				    <a href="#myModal" class="btn btn-lg btn-default" data-toggle="modal">Mensaje</a>				    
				    <!-- Modal HTML -->
				    <div id="myModal" class="modal fade">
				        <div class="modal-dialog">
				            <div class="modal-content">
				                <div class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                    <h4 class="modal-title">Escribe aquí tu mensaje para UsuarioX</h4>
				                </div>
				                <div class="modal-body">
				                    <textarea class="form-control" id="mensaje" name="mensaje"></textarea>
				                </div>
				                <div class="modal-footer">
				                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				                    <button type="button" class="btn btn-primary">Enviar</button>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>  
			</div>
		</div>	
	<!-- ****************************** LIBRO DESTACADO ************************************* -->
		<div class="panel panel-success">
			<div class="panel-heading">
				<h1 class="titulosenperfil">Su Libro Destacado</h1>
			</div>
			<div class="panel-body ">
				<a href="ejemplar.php"><img class="center-block" id="librodestacado" src="http://placehold.it/200x300" alt="Libro Destacado"></a>
			</div>
		</div>
	<!-- ****************************** DESCRIPCION ************************************* -->		
		<div class="panel panel-success">
			<div class="panel-heading">
				<h1 class="titulosenperfil">Su Descripcion</h1>
			</div>
			<div class="panel-body ">
			   <p>Cosas sobre el usuario.</p> 
			</div>
		</div>		
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
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
					 	<a href="ejemplar.php"><img src="http://placehold.it/100x150" alt="Libro"></a>
					 	<p>STATUS</p>
					</div>
					<div class="col-md-2 librosencontenedor">
						<a href="ejemplar.php" class="center-block">TITULO</a>
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


	
