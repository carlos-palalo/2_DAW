//lenguaje_26.js - Bucles: for

var i;

console.log('PRIMER BUCLE');
for(i=1;i<=10;i++) {
	console.log(i);
}

console.log('SEGUNDO BUCLE');
for(i=1;i<=10;++i) {
	if(i==5)
		break;
	console.log(i);
}

console.log('TERCER BUCLE');
for(i=1;i<=10;i++) {
	if(i==5)
		continue;
	console.log(i);
}