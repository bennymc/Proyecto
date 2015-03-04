<?php
	include "includes/navbar.html";
?>
	    <section id="formulario" class="col-md-4 col-md-offset-4">
			<form class="form-horizontal">
				<fieldset>
					<legend>Registro de nuevo usuario</legend>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
					  <div class="col-md-5">
					  <input id="nombre" name="nombre" type="text" placeholder="Ej. Juan Bernardo" class="form-control input-md" required="">    
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="apellidos">Apellidos</label>  
					  <div class="col-md-5">
					  <input id="apellidos" name="apellidos" type="text" placeholder="Ej. Morales Castañeda" class="form-control input-md" required="">    
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Email">Email</label>  
					  <div class="col-md-5">
					  <input id="Email" name="Email" type="text" placeholder="" class="form-control input-md" required="">    
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="sexo">Sexo</label>
					  <div class="col-md-4">
					    <select id="sexo" name="sexo" class="form-control">
					      <option value="m">Masculino</option>
					      <option value="f">Femenino</option>
					    </select>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="intereses">Intereses</label>
					  <div class="col-md-4">                     
					    <textarea class="form-control" id="intereses" name="intereses"></textarea>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="username">Nombre de usuario</label>
					  <div class="col-md-5">
					    <input id="username" name="username" placeholder="" class="form-control input-md" required="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="password">Contraseña</label>
					  <div class="col-md-5">
					    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="bday">Fecha de nacimiento</label>
					  <div class="col-md-5">
					    <input id="bday" name="bday" type="date" placeholder="" class="form-control input-md" required="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="imgperfil">Imagen de perfil</label>
					  <div class="col-md-4">
					    <input id="imgperfil" name="imgperfil" class="input-file" type="file">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="enviar">Confirmar</label>
					  <div class="col-md-4">
					    <button id="enviar" name="enviar" class="btn btn-default">Enviar</button>
					  </div>
					</div>
				</fieldset>
			</form>
		</section>
    </body>
</html>