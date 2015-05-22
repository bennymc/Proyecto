
<!-- ****************************** INICIA ASIDE ***************************************** -->
    <aside class="col-md-3">
    <!-- ****************************** FOTO Y NOMBRE EN PERFIL ************************************* -->
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil" id="Nombre"> {nombre} </h1>
			</div>
			<div class="panel-body ">
			    <a href="editar.php"><img class="center-block" id="fotodeperfil" src= "www/images/{foto}"  alt="imagen de perfil"></a>
			</div>
    	</div>	
    <!-- ****************************** LIBRO DESTACADO ************************************* -->
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil" id="Ldestacado"> {libroD} </h1>
			</div>
			<div class="panel-body ">
			    <a href="ejemplar.php" id="LdestacadoTitulo"><img class="center-block" id="librodestacado" src= {imglibroD} alt="Libro Destacado"></a>
			</div>
    	</div>	
    <!-- ****************************** DESCRIPCION ************************************* -->	
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil">Descripcion</h1>
			</div>
			<div class="panel-body ">
			    <p id="Intereses"> {descripcion} </p>

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
				<div class="col-md-12" id="ContenedorPerfil">
					{LIBRERO}
					{repite libro}
					<div class="col-md-2 librosencontenedor" id="libroP">	
					<a href="ejemplar.php" class="center-block">{titulo}</a>
					<a href="ejemplar.php" class="center-block"><img src= {imglibro} alt="Libro"></a>
					<a href="#" data-toggle="modal" data-target="#smallModal" class="center-block">{status}</a>					
					</div>					
					{end repite} 
				</div>				
			</div>
		</div>
		<div class="flechas">
			<a href="#"><span class="glyphicon glyphicon-chevron-left"></span>Atrás</a>
	    	<a href="#" class="pull-right">Siguiente<span class="glyphicon glyphicon-chevron-right"></span></a>
	    </div>
    </section>
<!-- ************************************* FIN SECTION ************************************* -->
