<?php
	include "includes/navbar.html";
?>
	<section class="col-md-7">
		<div class="panel panel-success">
  			<div class="panel-heading">
    			<h3 class="panel-title" id="grande">Libros Populares.</h3>
  			</div>
  			<div class="panel-body">
   				 Mostrara libros populares entre los  usuarios
  			</div>
		</div>
		<div class="panel panel-success">
  			<div class="panel-heading">
   				 <h3 class="panel-title" id="grande">Ultimas Reseñas.</h3>
  			</div>
  			<div class="panel-body">
   				 Mostrara ultimas reseñas realizadas por usuarios
  			</div>
		</div>
		
		
		<div class="alert alert-dismissible alert-success">
		<form class="form-horizontal">
				<fieldset>
					<legend>No encontraste un Libro? Sugierelo!</legend>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Email">Email</label>  
					  <div class="col-md-5">
					  <input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md" required="">    
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Titulo">Titulo:</label>  
					  <div class="col-md-5">
					  <input id="Titulo" name="Titulo" type="text" placeholder="Titulo" class="form-control input-md" required="">    
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Autor">Autor:</label>  
					  <div class="col-md-5">
					  <input id="Autor" name="Autor" type="text" placeholder="Autor" class="form-control input-md" required="">    
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="comentarios">Comentarios:</label>
					  <div class="col-md-4">                     
					    <textarea class="form-control" id="comentarios" name="Comentarios"></textarea>
					  </div>
					</div>
					
					
				</fieldset>
			</form>
			
		</div>
	</section>

	<div class="col-md-1"></div>

	<aside class="col-md-4 " >
		<div class="panel panel-success" id="contenedorlogin">
			<div class="panel-heading">
	    		<h3 class="panel-title" id="Tlogin"> Inicia Sesion:</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="usuario" class="col-lg-2 control-label" id="usuario" >Usuario:</label>
						<div class="col-lg-8">
						<input type="text" class="form-control" id="usuario" placeholder="USUARIO">
						</div>
					</div>
					<div class="form-group">
					    <label for="pass" class="col-lg-2 control-label" id="pass">Contraseña:</label>
					    <div class="col-lg-8">
					    <input type="password" class="form-control" id="pass" placeholder="CONTRASEÑA">
						</div>			      
					</div>

					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-default" id="btnlogin">Entrar</button>
						</div>

					</div>	
					<a href="#" class="btn btn-link" id="recuperar">Recuperar contraseña</a>
					<a href="registro.php" class="btn btn-link" id="registro">Registro</a>
				</form>
			</div>			
		</div>
	</aside>

</body>

</html>
