function validacion() {
			valor = document.getElementById("nombre").value;
			if (!(/^\D[a-zA-Z\s]+$/.test(valor)) || (/(select).*(from).*/.test(valor))){
				document.getElementById("nombre").setAttribute('class', 'form-control input-md error');
			  	return false;
			}else{
				document.getElementById("nombre").setAttribute('class', 'form-control input-md');
			}
			valor = document.getElementById("apellidos").value;
			if (!(/^\D[a-zA-Z\s]+$/.test(valor)) || (/(select).*(from).*/.test(valor))){
				document.getElementById("apellidos").setAttribute('class', 'form-control input-md error');
			  	return false;
			}else{
				document.getElementById("apellidos").setAttribute('class', 'form-control input-md');
			}
			valor = document.getElementById("username").value;
			if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				document.getElementById("username").setAttribute('class', 'form-control input-md error');
			  return false;
			}else{
				document.getElementById("username").setAttribute('class', 'form-control input-md');
			}
			indice = document.getElementById("sexo").selectedIndex;
			if(indice < 0 || indice > 1) {
				document.getElementById("sexo").setAttribute('class', 'form-control input-md error');
			  return false;
			}else{
				document.getElementById("sexo").setAttribute('class', 'form-control input-md');
			}
			valor = document.getElementById("email").value;
		    if( !(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(valor))){
				document.getElementById("email").setAttribute('class', 'form-control input-md error');
			    return false;
			}else{
				document.getElementById("email").setAttribute('class', 'form-control input-md');
			}
			/*var today = new Date();
	     	var inputDate = new Date(document.getElementById("bday").value);
	      	if(inputDate.value == " "){
	      		document.getElementById("bday").setAttribute('class', 'form-control input-md error');
	            return false;
	        }else if (inputDate > today) {
	        	document.getElementById("bday").setAttribute('class', 'form-control input-md error');
	            return false;
	        }else{
				document.getElementById("bday").setAttribute('class', 'form-control input-md');
			}*/
			var dateEntered = $('#bday').val();
			if (!moment(dateEntered,'YYYY/MM/DD').isValid()) {
			  document.getElementById("bday").setAttribute('class', 'form-control input-md error');
	          return false;
			} else {
			  document.getElementById("bday").setAttribute('class', 'form-control input-md');
			}
			valor = document.getElementById("password").value;
			if( valor == null || valor.length < 8 || /^\s+$/.test(valor) ) {
				document.getElementById("password").setAttribute('class', 'form-control input-md error');
			  return false;
			}else{
				document.getElementById("password").setAttribute('class', 'form-control input-md');
			}
		    return true;
		}

function VEditar(){
			valor = document.getElementById("nombre").value;
			if (!(/^\D[a-zA-Z\s]+$/.test(valor)) || (/(select).*(from).*/.test(valor))){
				document.getElementById("nombre").setAttribute('class', 'form-control input-md error');
			  	return false;
			}else{
				document.getElementById("nombre").setAttribute('class', 'form-control input-md');
			}
			
			valor = document.getElementById("apellidos").value;
			if (!(/^\D[a-zA-Z\s]+$/.test(valor)) || (/(select).*(from).*/.test(valor))){
				document.getElementById("apellidos").setAttribute('class', 'form-control input-md error');
			  	return false;
			}else{
				document.getElementById("apellidos").setAttribute('class', 'form-control input-md');
			}

			indice = document.getElementById("sexo").selectedIndex;
			if(indice < 0 || indice > 1) {
				document.getElementById("sexo").setAttribute('class', 'form-control input-md error');
			  return false;
			}else{
				document.getElementById("sexo").setAttribute('class', 'form-control input-md');
			}

			var today = new Date();
	     	var inputDate = new Date(document.getElementById("bday").value);
	      	if(inputDate.value == " "){
	      		document.getElementById("bday").setAttribute('class', 'form-control input-md error');
	            return false;
	        }else if (inputDate > today) {
	        	document.getElementById("bday").setAttribute('class', 'form-control input-md error');
	            return false;
	        }else{
				document.getElementById("bday").setAttribute('class', 'form-control input-md');
			}

			return true;
}

function CambioPass(){
			valor = document.getElementById("passwordold").value;
			if( valor == null || valor.length < 8 || /^\s+$/.test(valor) ) {
				document.getElementById("passwordold").setAttribute('class', 'form-control input-md error');
			  return false;
			}else{
				document.getElementById("passwordold").setAttribute('class', 'form-control input-md');
			}
			valor = document.getElementById("passwordnew").value;
			if( valor == null || valor.length < 8 || /^\s+$/.test(valor) ) {
				document.getElementById("passwordnew").setAttribute('class', 'form-control input-md error');
			  return false;
			}else{
				document.getElementById("passwordnew").setAttribute('class', 'form-control input-md');
			}
			return true;
}

function VCorreo(){
			valor = document.getElementById("email").value;
		    if( !(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(valor))){
				document.getElementById("email").setAttribute('class', 'form-control input-md error');
			    return false;
			}else{
				document.getElementById("email").setAttribute('class', 'form-control input-md');
			}
			return true;
}

function ValidaSugerencia(){
			var valor = document.getElementById("Email").value;
			console.log(valor);
		    if( !(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(valor))){
				document.getElementById("Email").setAttribute('class', 'form-control input-md error');
			    return false;
			}else{
				document.getElementById("Email").setAttribute('class', 'form-control input-md');
			}
			return true;
}