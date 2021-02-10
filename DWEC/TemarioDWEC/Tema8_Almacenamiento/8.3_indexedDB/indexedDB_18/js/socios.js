function codigo() {
	var peticion, bd, transaccion, almacen;

	
	function refrescarListaSocios() {
		if (window.indexedDB) {
			peticion = window.indexedDB.open("biblioteca");

			peticion.onsuccess = function (evento) {
				bd = evento.target.result;
							
				transaccion = bd.transaction(bd.objectStoreNames, "readwrite");
				almacen = transaccion.objectStore("socios");

				document.getElementById("listaSocios").innerHTML = "";

				var peticionCursor = almacen.openCursor();
				peticionCursor.onsuccess = function (evento) {
					var cursor = peticionCursor.result;

					if(cursor) {
						insertarElementoControlLista(cursor.value);

						cursor.continue(); //continue incrementa el cursor una posición
					} else {
						console.log("FIN");
					}
				}

				document.getElementById("socio").value = "";
				document.getElementById("clave").value = "";
				document.getElementById("nombre").value = "";
				document.getElementById("apellidos").value = "";
				document.getElementById("direccion").value = "";
				//bd.close();
			};


			peticion.onerror = function (evento) {
				alert("No se ha creado la base de datos: " + event.target.errorCode);
			};


			peticion.onupgradeneeded = function (evento) {
				console.log("Upgradeneeded");
			};

		} else {
			console.log("IndexedDB no está soportado");
		}

		document.getElementById("botonCargar").disabled = true;
	}


	function insertarElementoControlLista(_socio) {
		var htmlTexto = _socio.nombre + " " + _socio.apellidos;
		var listaItem = document.createElement("option");
		listaItem.setAttribute("value",_socio.socio);
		listaItem.textContent = htmlTexto;

		var lista = document.getElementById("listaSocios");
		lista.appendChild(listaItem);

		listaItem.onclick = function () {
			var socio = lista.options[lista.selectedIndex].value;
			var transaccionEvento = bd.transaction(bd.objectStoreNames, "readwrite");
			var almacenEvento = transaccionEvento.objectStore("socios");
			var registroEvento = almacenEvento.get(socio);

			registroEvento.onsuccess = function(evento) {
				document.getElementById("socio").value = registroEvento.result.socio;
				document.getElementById("clave").value = registroEvento.result.clave;
				document.getElementById("nombre").value = registroEvento.result.nombre;
				document.getElementById("apellidos").value = registroEvento.result.apellidos;
				document.getElementById("direccion").value = registroEvento.result.direccion;
			}
		}
	}

	/***************************************************************
	 * INSERTAR ****************************************************
	 **************************************************************/
	document.getElementById("botonInsertar").onclick = function () {
		var transaccionInsertar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenInsertar = transaccionInsertar.objectStore("socios");
		var nuevoSocio = {};

		nuevoSocio.socio = document.getElementById("socio").value;
		nuevoSocio.clave = document.getElementById("clave").value;
		nuevoSocio.nombre = document.getElementById("nombre").value;
		nuevoSocio.apellidos = document.getElementById("apellidos").value;
		nuevoSocio.direccion = document.getElementById("direccion").value;

		almacenInsertar.add(nuevoSocio);
		refrescarListaSocios();
	}


	/***************************************************************
	 * MODIFICAR ***************************************************
	 **************************************************************/
	document.getElementById("botonModificar").onclick = function () {
		var transaccionInsertar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenInsertar = transaccionInsertar.objectStore("socios");
		var nuevoSocio = {};

		nuevoSocio.socio = document.getElementById("socio").value;
		nuevoSocio.clave = document.getElementById("clave").value;
		nuevoSocio.nombre = document.getElementById("nombre").value;
		nuevoSocio.apellidos = document.getElementById("apellidos").value;
		nuevoSocio.direccion = document.getElementById("direccion").value;

		almacenInsertar.put(nuevoSocio);
		refrescarListaSocios();
	}


	/***************************************************************
	 * ELIMINAR ****************************************************
	 **************************************************************/
	document.getElementById("botonEliminar").onclick = function () {
		var transaccionEliminar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenEliminar = transaccionEliminar.objectStore("socios");

		peticionEliminacion = almacenEliminar.delete(document.getElementById("socio").value);
		peticionEliminacion.onsuccess = function () {
			alert("Socio eliminado")
		}
		refrescarListaSocios();
	}

	document.getElementById("botonCargar").onclick = refrescarListaSocios;
}

window.onload = codigo;