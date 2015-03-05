<?php
	include "includes/navbar.html";
?>


	<aside  class="col-md-3 " ></aside>

	<section class="col-md-6">
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
					<div class="col-lg-10 col-lg-offset-2">
					<button type="submit" class="btn btn-danger" id="btnrecupera">Enviar</button>
					</div>

				</div>	
	  		</div>	
	  		</form>
		</div>

	</section>
	<aside  class="col-md-4 " ></aside>

	
  
		<?php
			include "includes/footer.html";
		?>



</body> 
</html>



