//lenguaje_81.js - Calcular valores UUID

//Generar un UUID
console.log("uuid".toUpperCase());
var cantidad = 10;
var uuid = "";
for(let num=1;num<=cantidad;num++) {
	uuid = "{";
	for(i=0;i<32;i++) {
		if(i==8 || i==12 || i==16 || i==20 )
			uuid += "-";
		uuid += Math.floor(Math.random() * 16).toString(16).toString().toUpperCase();
	}
	uuid += "}";
	console.log(uuid);
}