function codigo() {
	var peticion, bd, transaccion, almacen;

	
	function refrescarListaLibros() {
		if (window.indexedDB) {
			peticion = window.indexedDB.open("biblioteca");

			peticion.onsuccess = function (evento) {
				bd = evento.target.result;
							
				transaccion = bd.transaction(bd.objectStoreNames, "readwrite");
				almacen = transaccion.objectStore("libros");

				document.getElementById("listaLibros").innerHTML = "";

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


	function insertarElementoControlLista(libro) {
		//var htmlTexto = libro.isbn + "  <----->  " + libro.titulo;
		var htmlTexto = libro.titulo;
		var listaItem = document.createElement("option");
		listaItem.setAttribute("value",libro.isbn);
		listaItem.textContent = htmlTexto;

		var lista = document.getElementById("listaLibros");
		lista.appendChild(listaItem);

		listaItem.onclick = function () {
			var isbn = lista.options[lista.selectedIndex].value;
			var transaccionEvento = bd.transaction(bd.objectStoreNames, "readwrite");
			var almacenEvento = transaccionEvento.objectStore("libros");
			var registroEvento = almacenEvento.get(parseInt(isbn));

			registroEvento.onsuccess = function(evento) {
				document.getElementById("isbn").value = registroEvento.result.isbn;
				document.getElementById("titulo").value = registroEvento.result.titulo;
				document.getElementById("autor").value = registroEvento.result.autor;
				document.getElementById("editorial").value = registroEvento.result.editorial;
				document.getElementById("paginas").value = registroEvento.result.paginas;
				document.getElementById("precio").value = registroEvento.result.precio;
			}
		}
	}

	/***************************************************************
	 * INSERTAR ****************************************************
	 **************************************************************/
	document.getElementById("botonInsertar").onclick = function () {
		var transaccionInsertar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenInsertar = transaccionInsertar.objectStore("libros");
		var nuevoLibro = {};

		nuevoLibro.isbn = parseInt(document.getElementById("isbn").value);
		nuevoLibro.titulo = document.getElementById("titulo").value;
		nuevoLibro.autor = document.getElementById("autor").value;
		nuevoLibro.editorial = document.getElementById("editorial").value;
		nuevoLibro.paginas = parseInt(document.getElementById("paginas").value);
		nuevoLibro.precio = parseInt(document.getElementById("precio").value);

		almacenInsertar.add(nuevoLibro);
		refrescarListaLibros();
	}


	/***************************************************************
	 * MODIFICAR ***************************************************
	 **************************************************************/
	document.getElementById("botonModificar").onclick = function () {
		var transaccionModificar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenModificar = transaccionModificar.objectStore("libros");
		var nuevoLibro = {};

		nuevoLibro.isbn = parseInt(document.getElementById("isbn").value);
		nuevoLibro.titulo = document.getElementById("titulo").value;
		nuevoLibro.autor = document.getElementById("autor").value;
		nuevoLibro.editorial = document.getElementById("editorial").value;
		nuevoLibro.paginas = parseInt(document.getElementById("paginas").value);
		nuevoLibro.precio = parseInt(document.getElementById("precio").value);

		almacenModificar.put(nuevoLibro);
		refrescarListaLibros();
	}


	/***************************************************************
	 * ELIMINAR ****************************************************
	 **************************************************************/
	document.getElementById("botonEliminar").onclick = function () {
		var transaccionEliminar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenEliminar = transaccionEliminar.objectStore("libros");

		peticionEliminacion = almacenEliminar.delete(parseInt(document.getElementById("isbn").value));
		peticionEliminacion.onsuccess = function () {
			alert("Libro eliminado")
		}
		refrescarListaLibros();
	}

	document.getElementById("botonCargar").onclick = refrescarListaLibros;
}

window.onload = codigo;