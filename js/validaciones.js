function validacion() {
			valor = document.getElementById("nombre").value;
			if (!(/^\D[a-zA-Z\s]+$/.test(valor)) || (/(select).*(from).*/.test(valor))){
				document.getElementById("nombre").setAttribute('class', 'error');
			  	return false;
			}else{
				document.getElementById("nombre").setAttribute('class', 'valido');
			}
			valor = document.getElementById("apellidos").value;
			if (!(/^\D[a-zA-Z\s]+$/.test(valor)) || (/(select).*(from).*/.test(valor))){
				document.getElementById("apellidos").setAttribute('class', 'error');
			  	return false;
			}else{
				document.getElementById("apellidos").setAttribute('class', 'valido');
			}
			valor = document.getElementById("username").value;
			if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				document.getElementById("username").setAttribute('class', 'error');
			  return false;
			}else{
				document.getElementById("username").setAttribute('class', 'valido');
			}
			indice = document.getElementById("sexo").selectedIndex;
			if(indice < 0 || indice > 1) {
				document.getElementById("sexo").setAttribute('class', 'error');
			  return false;
			}else{
				document.getElementById("sexo").setAttribute('class', 'valido');
			}
			valor = document.getElementById("email").value;
			if(elemento.type == "email") {
			    if( !(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(valor))){
					document.getElementById("email").setAttribute('class', 'error');
				    return false;
				}else{
					document.getElementById("email").setAttribute('class', 'valido');
				}
			}
			var today = new Date();
	     	var inputDate = new Date(document.getElementById("bday").value);
	      	if(inputDate.value == " "){
	      		document.getElementById("bday").setAttribute('class', 'error');
	            return false;
	        }else if (inputDate > today) {
	        	document.getElementById("bday").setAttribute('class', 'error');
	            return false;
	        }else{
				document.getElementById("bday").setAttribute('class', 'valido');
			}
			valor = document.getElementById("password").value;
			if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				document.getElementById("password").setAttribute('class', 'error');
			  return false;
			}else{
				document.getElementById("password").setAttribute('class', 'valido');
			}
		    return true;
		}