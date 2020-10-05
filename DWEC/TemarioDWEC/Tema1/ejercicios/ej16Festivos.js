function esFestivo(_fecha) {
    var festivos = [
        new Date(2018, 0, 1),
        new Date(2018, 0, 6),
        new Date(2018, 3, 23),
        new Date(2018, 4, 1),
        new Date(2018, 4, 13),
        new Date(2018, 6, 25),
        new Date(2018, 8, 8),
        new Date(2018, 9, 12),
        new Date(2018, 10, 1),
        new Date(2018, 11, 6),
        new Date(2018, 11, 8),
        new Date(2018, 11, 25),
    ];

    var flag = false;

    for (i = 0; i < festivos.length; i++) {
        if (_fecha.getTime() == festivos[i].getTime()) {
            flag = true;
        }
        return flag;
    }
}

var cantidad = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

var fecha = new Date();
fecha.setHours(0, 0, 0, 0);
fecha.setFullYear(2021);

var opciones = { weekday: 'long', year: 'numeric', month: 'long' };
for (var i = 0; i < 12; i++) {
    for (var j = 0; j < cantidad[i]; j++) {
        fecha.setDate(j);
        if (esFestivo(fecha)) {
            console.log("Festivo: " + fecha.getDate + " - " + fecha.getMonth + " - " + fecha.getFullYear);
        } else {

        }
    }
}

//hacer un calendario