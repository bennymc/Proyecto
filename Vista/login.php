<?php
	include "includes/navbar.html";
?>

<div id="contenedor">
	<section id="formulario" class="col-md-4 col-md-offset-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="TituloGrande"> Inicia Sesion:</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="usuario" class="col-md-4 control-label" id="usuario" >Usuario:</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="usuario" placeholder="USUARIO">
						</div>
					</div>
					<div class="form-group">
					    <label for="pass" class="col-md-4 control-label" id="pass">Contraseña:</label>
					    <div class="col-md-8">
					    	<input type="password" class="form-control" id="pass" placeholder="CONTRASEÑA">
						</div>			      
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<button type="submit" class="btn btn-default pull-right">Entrar</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">	
							<a href="recupera.php" class="btn btn-link" id="recuperar">Recuperar contraseña</a>
							<a href="registro.php" class="btn btn-link pull-right" id="registro">Registro</a>
						</div>
					</div>
				</form>
			</div>	
		</div>		
	</section>
</div>		

<?php
	include "includes/footer.html";
?>