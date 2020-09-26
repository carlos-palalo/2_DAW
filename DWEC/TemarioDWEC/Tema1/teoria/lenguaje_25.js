//lenguaje_25.js - break y continue
			
var i=1;

console.log("PRIMER BUCLE");
while(i<=10) {
	if(i==5)
		break;
	console.log(i);
	i++;
}


i=1;
console.log("SEGUNDO BUCLE");
while(i<=10) {
	i++;
	if(i==5)
		continue;
	console.log(i);
	//i++; //Bucle infinito si se incrementa al final
}


i=1;
console.log("TERCER BUCLE");
while(i++<=10) {
	if(i==5)
		continue;
	console.log(i);
}


i=1;
console.log("CUARTO BUCLE");
while(++i<=10) {
	if(i==5)
		continue;
	console.log(i);
}