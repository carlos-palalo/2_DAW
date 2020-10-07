//lenguaje_78.js - Sacar todas los días del año y los festivos marcados

function esFestivo(_fecha) {
	var festivos = [
		new Date(2021,0,1),
		new Date(2021,0,6),
		new Date(2021,3,23),
		new Date(2021,4,1),
		new Date(2021,4,13),
		new Date(2021,6,25),
		new Date(2021,8,8),
		new Date(2021,9,12),
		new Date(2021,10,1),
		new Date(2021,11,6),
		new Date(2021,11,8),
		new Date(2021,11,25)
	];

	var flag = false;

	for(i=0;i<festivos.length;i++) {
		if(_fecha.getTime() == festivos[i].getTime())
			flag = true;
		}
			return flag;
}
	
var cantidad = [31,28,31,30,31,30,31,31,30,31,30,31];

var fecha = new Date();
fecha.setHours(0,0,0,0);
fecha.setFullYear(2021);

//var opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };

for(let mes=0;mes<=11;mes++) {
	for(let dia=1;dia<=cantidad[mes];dia++) {
		fecha.setMonth(mes);
		fecha.setDate(dia);
		if(esFestivo(fecha)) {
			console.log("FESTIVO--" + fecha.toString() + "--FESTIVO\n");
		}
		else {
			console.log(fecha.toString() + "\n");
		}
	}
}