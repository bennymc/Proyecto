<?php
	include "includes/navbar.html";
?>
<script type="text/javascript">
    	CargarPerfil();
</script>
<!-- ****************************** INICIA ASIDE ***************************************** -->
    <aside class="col-md-3">
    <!-- ****************************** FOTO Y NOMBRE EN PERFIL ************************************* -->
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil" id="Nombre">Tu Nombre aqui</h1>
			</div>
			<div class="panel-body ">
			    <a href="editar.php"><img class="center-block" id="fotodeperfil" src="http://placehold.it/200x200" alt="imagen de perfil"></a>
			</div>
    	</div>	
    <!-- ****************************** LIBRO DESTACADO ************************************* -->
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil" id="Ldestacado">Libro Destacado</h1>
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
    	<a id="editarperfil" class="btn btn-info center-block" role="button" href="editar.php">EDITAR PERFIL</a>	
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
				<div class="col-md-12" id="ContenedorPerfil">
					
					<div class="col-md-2 librosencontenedor" id="libroP">						
					 	<?php
							include "includes/LibrosenPerfil.html";
						?>
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


	
