<?php
	include "Vista/navbar.html";
?>

<!-- ****************************** INICIA ASIDE ***************************************** -->
    <aside class="col-md-3">
    <!-- ****************************** FOTO Y NOMBRE EN PERFIL ************************************* -->
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil" id="Nombre"><?php echo $this->mdl->nombre ?> </h1>
			</div>
			<div class="panel-body ">
			    <a href="editar.php"><img class="center-block" id="fotodeperfil" src=<?php echo $this->mdl->imgPerfil ?> alt="imagen de perfil"></a>
			</div>
    	</div>	
    <!-- ****************************** LIBRO DESTACADO ************************************* -->
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil" id="Ldestacado"><?php echo $this->mdl->librodestacado ?> </h1>
			</div>
			<div class="panel-body ">
			    <a href="ejemplar.php" id="LdestacadoTitulo"><img class="center-block" id="librodestacado" src=<?php echo $this->mdl->imgLdestacado ?> alt="Libro Destacado"></a>
			</div>
    	</div>	
    <!-- ****************************** DESCRIPCION ************************************* -->	
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil">Descripcion</h1>
			</div>
			<div class="panel-body ">
			    <p id="Intereses"><?php echo $this->mdl->descripcion ?></p>

			</div>
    	</div>
    <!-- ****************************** BOTON EDITAR PERFIL ****************************** -->
    	<a id="editarperfil" class="btn btn-info center-block" role="button" href="index.php?ctl=editar">EDITAR PERFIL</a>	
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
					<a href="ejemplar.php" class="center-block">TITULO</a>
					<a href="ejemplar.php" class="center-block"><img src="http://placehold.it/100x150" alt="Libro"></a>
					<a href="#" data-toggle="modal" data-target="#smallModal" class="center-block">STATUS</a>					
					 	
					</div>
					<?php
							include "Vista/LibrosenPerfil.html";
						?>
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
	include "Vista/footer.html";
?>


	
