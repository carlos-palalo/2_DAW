//Paso por el ribera de castilla (Expediente Académico). Número convocatorias (2 por año), jun-sept y mar-jun
//Hacer un examen de cada asignatura, numero aleatorio entre 1 y 10, si es mayor que 5, modulo aprobado
//Empezamos en 2019
//Se acaba cuando todos hemos sacado el titulo
//promocionar suma modulos pendientes <10

function random(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min);
}

const horas = [8, 6, 3, 4, 3, 6, 8, 9, 4, 6, 3];
const asig = ["PROG", "BBDD", "ENT", "LMAR", "FOL", "SIS", "DWEC", "DWES", "DAW", "DINT", "EIE"]

function Estudiante(nombre) {
    this.nombre = nombre;
    this.notasPrim = [0, 0, 0, 0, 0, 0];
    this.notasSeg = [0, 0, 0, 0, 0]

    this.curso = 1;
    this.año = 2020;
    this.pendientesPrimero;
    this.opor = 2;

    this.examen = function () {
        if (this.curso == 1) {
            do {
                for (let i = 0; i < this.notasPrim.length; i++) {
                    if (this.notasPrim[i] < 5) {
                        var n = random(1, 10);
                        this.notasPrim[i] = n;
                    }
                    if (this.notasPrim.every(y => y > 5)) {
                        this.opor--;
                        return;
                    }
                }
                this.opor--;
            } while (this.opor > 0)
        } else if (this.curso == 2) {
            do {
                for (let i = 0; i < this.notasSeg.length; i++) {
                    if (this.notasSeg[i] < 5) {
                        var n = random(1, 10);
                        this.notasSeg[i] = n;
                    }
                    if (this.notasSeg.every(y => y > 5)) {
                        this.opor--;
                        return;
                    }
                }
                this.opor--;
            } while (this.opor > 0)
        }
    }
}

var clase = [];
var cont = 0;

do {
    clase.push(new Estudiante("e" + cont++));
} while (cont < 20)

clase.forEach(x => {
    do {
        x.opor = 2;
        x.examen();
        x.año++;
    } while (x.notasPrim.some(y => y < 5));

    x.curso++;

    do {
        x.opor = 2;
        x.examen();
        x.año++;
    } while (x.notasSeg.some(y => y < 5));

    console.log("Nombre: " + x.nombre + " -- Año fin: " + x.año);
    console.log(" ---- Notas Primero ----");
    for (let i = 0; i < asig.length; i++) {
        if (i == 6)
            console.log(" ---- Notas Segundo ----")

        if (i < 6) {
            console.log("\t" + asig[i] + " " + x.notasPrim[i]);
        } else {
            console.log("\t" + asig[i] + " " + x.notasSeg[i - 6]);
        }
    }
})

console.log(clase);