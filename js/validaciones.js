function validacion() {
			valor = document.getElementById("name").value;
			if (!(/^\D[a-zA-Z\s]+$/.test(valor)) || (/(select).*(from).*/.test(valor))){
				document.getElementById("name").setAttribute('class', 'error');
			  	return false;
			}else{
				document.getElementById("name").setAttribute('class', 'valido');
			}
			valor = document.getElementById("username").value;
			if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				document.getElementById("username").setAttribute('class', 'error');
			  return false;
			}else{
				document.getElementById("username").setAttribute('class', 'valido');
			}
			indice = document.getElementById("carrera").selectedIndex;
			if(indice == null || indice == 0) {
				document.getElementById("carrera").setAttribute('class', 'error');
			  return false;
			}else{
				document.getElementById("carrera").setAttribute('class', 'valido');
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