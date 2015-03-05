<?php
	include "includes/navbar.html";
?>

	<section class="col-md-4 col-md-offset-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
	   			 <h3 id="recuperarpass" class="panel-title">Recuperar Contraseña</h3>
	  		</div>
	  		<form>
	  		<div class="panel-body">
	   			<div class="form-group">
					  <label class="col-md-4 control-label" for="inputrecuperapass">Ingresa tu Usuario o Correo electronico:</label>
					  <div class="col-md-5">
					    <input id="inputrecuperapass" name="inputrecuperapass" placeholder="" class="form-control input-md" required="">
					  </div>
					</div>
	  		
		  		<div class="form-group">
					<div class="col-md-6 col-md-offset-1">
					<button type="submit" class="btn btn-danger" id="btnrecupera">Enviar</button>
					</div>
				</div>	
	  		</div>	
	  		</form>
		</div>
	</section>
		<?php
			include "includes/footer.html";
		?>


