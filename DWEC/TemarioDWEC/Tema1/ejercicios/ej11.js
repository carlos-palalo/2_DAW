//Decir qué es la cadena de caracteres
//Tlf, cod postal, cuenta bancaria, nombre, direccion ip
var ip = /^(\d{3}\.){3}\d{3}$/;  //IP
var dni = /^\d{8}[A-Z]$/;  //DNI
var tlf = /^[679][0-9]{8}$/;    //TLF
var cuentaBancaria = /^ES\d{22}$/;    //CUENTA BANCARIA
var email = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;   //CORREO 1
var matriAntigua = /^[A-Z]{1,2}\d{4}[A-Z]{1,2}$/;  //MATRICULA ANTIGUA
var matriModerna = /^[0-9]{4}[^AEIOUQY]{3}$/;
var codPostal = /^[0-9]{4,5}$/; //CODIGO POSTAL
var mac = /^([0-9,A-F]{2}:){5}[0-9,A-F]{2}$/; //MAC
var cadena = "00:15:5D:2A:DF:15";

if(ip.test(cadena)){
    console.log("La cadena "+cadena+" es una dirección IP.");
}
if(tlf.test(cadena)){
    console.log("La cadena "+cadena+" es un teléfono.");
}
if(dni.test(cadena)){
    console.log("La cadena "+cadena+" es un DNI.");
}
if(cuentaBancaria.test(cadena)){
    console.log("La cadena "+cadena+" es una cuenta bancaria.");
}
if(email.test(cadena)){
    console.log("La cadena "+cadena+" es un email.");
}
if(matriAntigua.test(cadena)){
    console.log("La cadena "+cadena+" es una matrícula antigua.");
}
if(matriModerna.test(cadena)){
    console.log("La cadena "+cadena+" es una matrícula moderna.");
}
if(codPostal.test(cadena)){
    console.log("La cadena "+cadena+" es un código postal.");
}
if(mac.test(cadena)){
    console.log("La cadena "+cadena+" es un MAC.");
}