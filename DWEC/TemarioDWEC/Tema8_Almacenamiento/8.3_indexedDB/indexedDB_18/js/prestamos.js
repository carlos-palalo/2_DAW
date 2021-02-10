function codigo() {
	var peticion, bd, transaccion, almacenLibros, almacenSocios, almacenPrestamos;

	
	function refrescarListas() {
		if (window.indexedDB) {
			peticion = window.indexedDB.open("biblioteca");

			peticion.onsuccess = function (evento) {
				bd = evento.target.result;
				transaccion = bd.transaction(bd.objectStoreNames, "readwrite");

				almacenLibros = transaccion.objectStore("libros");
				document.getElementById("listaLibros").innerHTML = "";
				var peticionCursorLibros = almacenLibros.openCursor();
				peticionCursorLibros.onsuccess = function (evento) {
					var cursor = peticionCursorLibros.result;

					if(cursor) {
						insertarElementoControlLista(cursor.value,"controlLibros");
						cursor.continue();
					}
				}

				almacenSocios = transaccion.objectStore("socios");
				document.getElementById("listaSocios").innerHTML = "";
				var peticionCursorSocios = almacenSocios.openCursor();
				peticionCursorSocios.onsuccess = function (evento) {
					var cursor = peticionCursorSocios.result;

					if(cursor) {
						insertarElementoControlLista(cursor.value,"controlSocios");
						cursor.continue();
					}
				}

				almacenPrestamos = transaccion.objectStore("prestamos");
				document.getElementById("listaPrestamos").innerHTML = "";
				var peticionCursorPrestamos = almacenPrestamos.openCursor();
				peticionCursorPrestamos.onsuccess = function (evento) {
					var cursor = peticionCursorPrestamos.result;

					if(cursor) {
						insertarElementoControlLista(cursor.value,"controlPrestamos");
						cursor.continue();
					}
				}

				//bd.close();
			};


			peticion.onerror = function (evento) {
				alert("No se ha creado la base de datos: " + evento.target.errorCode);
			};


			peticion.onupgradeneeded = function (evento) {
				console.log("Upgradeneeded");
			};

		} else {
			console.log("IndexedDB no está soportado");
		}

		document.getElementById("botonCargar").disabled = true;
	}


	function insertarElementoControlLista(elemento,control) {

		var htmlTexto, listaItem, lista;

		listaItem= document.createElement("option");
		
		if(control=="controlLibros") {
			htmlTexto = elemento.isbn + " <---> " + elemento.titulo + " <---> " + elemento.autor;
			listaItem.setAttribute("value",elemento.isbn);
			lista = document.getElementById("listaLibros");
		}
		
		if(control=="controlSocios") {
			htmlTexto = elemento.socio + " <---> " + elemento.nombre + " " + elemento.apellidos;
			listaItem.setAttribute("value",elemento.socio);
			lista = document.getElementById("listaSocios");
		}

		if(control=="controlPrestamos") {
			htmlTexto = elemento.isbn + " <---> " + elemento.socio + " <---> " + elemento.fechaprestamo + " <---> " + elemento.fechadevolucion;
			listaItem.setAttribute("value",elemento.isbn+","+elemento.socio);
			lista = document.getElementById("listaPrestamos");
		}

		listaItem.textContent = htmlTexto;
		lista.appendChild(listaItem);
	}


	/***************************************************************
	 * REALIZAR PRÉSTAMO *******************************************
	 **************************************************************/
	document.getElementById("botonPrestar").onclick = function () {
		var transaccionPrestar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenPrestar = transaccionPrestar.objectStore("prestamos");
		var nuevoPrestamo = {};
		var lista;

		lista = document.getElementById("listaLibros");
		nuevoPrestamo.isbn = parseInt(lista.options[lista.selectedIndex].value);

		lista = document.getElementById("listaSocios");
		nuevoPrestamo.socio = lista.options[lista.selectedIndex].value;

		nuevoPrestamo.fechaprestamo = new Date (document.getElementById("fecha").value).toUTCString();
		
		nuevoPrestamo.fechadevolucion = "";

		almacenPrestar.add(nuevoPrestamo);
		refrescarListas();
	}


	/***************************************************************
	 * REALIZAR DEVOLUCIÓN *****************************************
	 **************************************************************/
	document.getElementById("botonDevolver").onclick = function () {
		var transaccionPrestar = bd.transaction(bd.objectStoreNames,"readwrite");
		var almacenPrestar = transaccionPrestar.objectStore("prestamos");
		var lista, clave;
		

		lista = document.getElementById("listaPrestamos");
		clave = lista.options[lista.selectedIndex].value.split(",");
		clave[0] = parseInt(clave[0]); //IMPORTANTE

		var encontrado = almacenPrestar.get(clave);
		encontrado.onsuccess = function(evento) {
			var devolucion = {};

			devolucion.isbn = parseInt(encontrado.result.isbn);
			devolucion.socio = encontrado.result.socio;
			devolucion.fechaprestamo = encontrado.result.fechaprestamo;
			devolucion.fechadevolucion = new Date (document.getElementById("fecha").value).toUTCString();
			
			almacenPrestar.put(devolucion);
			refrescarListas();
		}
	}

	document.getElementById("botonCargar").onclick = refrescarListas;
}

window.onload = codigo;