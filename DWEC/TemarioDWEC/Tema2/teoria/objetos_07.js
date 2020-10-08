//objetos_07.js - Métodos

//EJEMPLO1 --> EN UNA FUNCIÓN CONSTRUCTORA
function Libro(titulo,autor) {
    this.titulo = titulo;
    this.autor = autor;
    this.vendidos = 0;
    
    this.verDatos = function() {
        return this.titulo + " - " + this.autor + " - " + this.vendidos;
    }

    this.vender = function(venta) {
        this.vendidos += venta;
    }
}


//EJEMPLO2 --> USANDO LA NOTACIÓN LITERAL
var persona = {
    nombre:"Luis",
    edad:30,
    cumplir:function(){
        this.edad++;
    }
}


//EJEMPLO3 --> AÑADIR UN MÉTODO CON NOTACIÓN PUNTO
var coche = new Object();

coche.recorrido = 0;
coche.combustible = 50;

coche.acelerar = function() {
    this.recorrido++;
    this.combustible--;
}




//Llamadas a los métodos
var libro = new Libro("libro1","autor1");
libro.vender(5);
libro.vender(2);
console.log(libro.verDatos());

persona.cumplir();
console.log(persona.nombre + " - " + persona.edad);

coche.acelerar();coche.acelerar();coche.acelerar();
console.log(coche.recorrido + " - " + coche.combustible);

//Añadir un método a partir de una función. Es como el ejemplo 3
function repostar1(cantidad) {
    this.combustible += cantidad;
}

coche.repostar = repostar1;
coche.repostar(40);
console.log(coche.recorrido + " - " + coche.combustible);