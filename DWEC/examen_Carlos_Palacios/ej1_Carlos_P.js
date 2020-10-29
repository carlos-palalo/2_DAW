/***********************************/
/****** 1º EXAMEN EJERCICIO 1 ******/
/* CARLOS PALACIOS ALONSO - 2º DAW */
/***********************************/

function random(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min);
}

function finanzasPersonales(titular, saldo, sueldo, deuda) {
    this.titular = titular;
    this.saldo = saldo;
    this.sueldo = sueldo;
    this.deuda = deuda;
    this.gastos = new Array();
    this.mesDeuda = new Array();
    this.fechaFinDeuda = new Date();
    this.mes = -1;

    this.cobrar = function () {
        this.mes++;
        this.gastos[this.mes] = random(700, 900);
        this.mesDeuda[this.mes] = random(100, 400);
        this.deuda -= this.mesDeuda[this.mes];
        this.saldo += this.sueldo - this.gastos[this.mes] - this.mesDeuda[this.mes];
        if (this.deuda < 0) {
            this.deuda = 0;
        }
    }
}

var personas = [];
personas.push(new finanzasPersonales("Carlos", 1000, 1500, 4000));
personas.push(new finanzasPersonales("Juan", 1500, 1570, 4500));
personas.push(new finanzasPersonales("Santiago", 1060, 1800, 1200));
personas.push(new finanzasPersonales("Carmen", 1300, 3500, 1500));
personas.push(new finanzasPersonales("Laura", 1070, 2500, 3000));


personas.forEach(x => {
    do {
        x.fechaFinDeuda.setDate(x.fechaFinDeuda.getDate() + 1);
        if (x.fechaFinDeuda.getDate() == 27) {
            x.cobrar();
        }
    } while (x.deuda > 0);
})

console.table(personas);
