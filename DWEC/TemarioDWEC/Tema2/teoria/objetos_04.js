//objetos_04.js - Función constructora

//Creación de objetos con una función constructora
function Casa(metros,habitaciones,localidad) {
    this.metros = metros;
    this.habitaciones = habitaciones;
    this.localidad = localidad;
}

var casa1 = new Casa(80,3,"Valladolid");
var casa2 = new Casa(70,2,"Madrid");

var listaPropiedades = Object.keys(casa1);
console.log("PROPIEDADES DEL OBJETO casa1");
console.log(listaPropiedades);
listaPropiedades.forEach(x => console.log(" --> " + casa1[x]));


//Una propiedad sea objeto
function Persona(nombre,edad,dni) {
    this.nombre = nombre;
    this.edad = edad;
    this.dni = dni;
}

var persona1 = new Persona("Alfonso",50,"12345678R");
var persona2 = new Persona("Marta",40,"12213443W");

function Apartamento(metros,habitaciones,localidad,propietario) {
    this.metros = metros;
    this.habitaciones = habitaciones;
    this.localidad = localidad;
    this.propietario = propietario;
}

var apartamento1 = new Apartamento(50,1,"Sevilla",persona1);
console.log("\n\nUNA PROPIEDAD PUEDE SER A SU VEZ UN OBJETO. OJO CON LA NOTACIÓN");
console.log(apartamento1.propietario.nombre);
console.log(apartamento1.propietario.edad);
console.log(apartamento1.propietario.dni);

listaPropiedades = Object.keys(apartamento1.propietario);
listaPropiedades.forEach(x => console.log(" --> " + apartamento1.propietario[x]));