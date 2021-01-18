function codigo() {
	var peticion, bd, transaccion, almacen;

	
	function refrescarListaPistas() {
		if (window.indexedDB) {
			peticion = window.indexedDB.open("musica");

			peticion.onsuccess = function (evento) {
				bd = evento.target.result;
							
				transaccion = bd.transaction(bd.objectStoreNames, "readwrite");
				almacen = transaccion.objectStore("pista");

				document.getElementById("listaPistas").innerHTML = "";

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


	function insertarElementoControlLista(pista) {
		//var htmlTexto = libro.isbn + "  <----->  " + libro.titulo;
		var htmlTexto = pista.nombre;
		console.log(htmlTexto);
		var listaItem = document.createElement("option");
		listaItem.setAttribute("value",pista.id);
		listaItem.textContent = htmlTexto;

		var lista = document.getElementById("listaPistas");
		lista.appendChild(listaItem);

		listaItem.onclick = function () {
			var id = lista.options[lista.selectedIndex].value;
			var transaccionEvento = bd.transaction(bd.objectStoreNames, "readwrite");
			var almacenEvento = transaccionEvento.objectStore("pista");
			var registroEvento = almacenEvento.get(parseInt(id));

			registroEvento.onsuccess = function(evento) {
				document.getElementById("id").value = registroEvento.result.id;
				document.getElementById("nombre").value = registroEvento.result.nombre;
				document.getElementById("archivo").value = registroEvento.result.archivo;
				document.getElementById("album").value = registroEvento.result.idAlbum;
			}
		}
	}

	/***************************************************************
	 * INSERTAR ****************************************************
	 **************************************************************/
	document.getElementById("botonInsertar").onclick = function () {
		var transaccionInsertar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenInsertar = transaccionInsertar.objectStore("pista");
		var nuevaPista = {};

		nuevaPista.nombre = document.getElementById("nombre").value;
		nuevaPista.archivo = document.getElementById("archivo").value;
		nuevaPista.idAlbum = parseInt(document.getElementById("album").value);

		almacenInsertar.add(nuevaPista);
		refrescarListaPistas();
	}


	/***************************************************************
	 * MODIFICAR ***************************************************
	 **************************************************************/
	document.getElementById("botonModificar").onclick = function () {
		var transaccionModificar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenModificar = transaccionModificar.objectStore("pista");
		var nuevaPista = {};

		nuevaPista.id = parseInt(document.getElementById("id").value);
		nuevaPista.nombre = document.getElementById("nombre").value;
		nuevaPista.archivo = document.getElementById("archivo").value;
		nuevaPista.idAlbum = parseInt(document.getElementById("album").value);

		almacenModificar.put(nuevaPista);
		refrescarListaPistas();
	}


	/***************************************************************
	 * ELIMINAR ****************************************************
	 **************************************************************/
	document.getElementById("botonEliminar").onclick = function () {
		var transaccionEliminar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenEliminar = transaccionEliminar.objectStore("pista");

		peticionEliminacion = almacenEliminar.delete(parseInt(document.getElementById("id").value));
		peticionEliminacion.onsuccess = function () {
			alert("Libro eliminado")
		}
		refrescarListaPistas();
	}

	document.getElementById("botonCargar").onclick = refrescarListaPistas;
}

window.onload = codigo;