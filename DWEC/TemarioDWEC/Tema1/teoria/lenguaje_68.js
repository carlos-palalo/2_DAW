//lenguaje_68.js - Ejercicio de expresiones regulares para validar datos de la vida real

//NOMBRE
var nombreExpr = /^[A-Z]{1}[a-z]+|[A-Z]{1}[a-z]+\s[A-Z]{1}[a-z]+$/;
var nombre = "";
nombreExpr.test(nombre) ? console.log("BIEN") : console.log("MAL");


//DNI
var dniExpr = /^\d{8}[a-zA-Z]$/;
var dni = "";
expDni.test(dni) ? console.log("BIEN") : console.log("MAL");


//TELÉFONO
var telefonoExpr = /^[679][0-9]{8}$/;
var telefono = "";
telefonoDni.test(telefono) ? console.log("BIEN") : console.log("MAL");


//CÓDIGO POSTAL
var cpExpr = /^\d{5}$/;
var cp = "";
cpExpr.test(cp) ? console.log("BIEN") : console.log("MAL");


//MATRÍCULA VIEJA
var matriculavExpr = /^[A-Z]{1,2}\d{4}[A-Z]{1,2}$/;
var matriculav = "";
matriculavExpr.test(matriculav) ? console.log("BIEN") : console.log("MAL");


//MATRÍCULA NUEVA
var matriculanExpr = /^[0-9]{4}[B-DF-HJ-NP-TV-Z]{3}$/;
var matriculan = "";
matriculanExpr.test(matriculan) ? console.log("BIEN") : console.log("MAL");


//ISBN
var isbnExpr = /^(\d{10})|(\d{13})$/;
var isbn = "";
isbnExpr.test(isbn) ? console.log("BIEN") : console.log("MAL");


//EMAIL
var emailExpr1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var emailExpr2 = /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[_a-z0-9-]+(.[_a-z0-9-]+)*(.[a-z]{2,4})$/;
var emailExpr3 = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})+$/;
var email = "";
emailExpr1.test(email) ? console.log("BIEN") : console.log("MAL");


//URL
var urlExpr = /^https*:\/\/www\.[a-z]+\.[a-z]{2,3}$/;
var url = "";
urlExpr.test(url) ? console.log("BIEN") : console.log("MAL");