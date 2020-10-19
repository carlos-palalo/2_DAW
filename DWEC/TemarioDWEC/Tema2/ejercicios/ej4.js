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
                for (let i = 0; i < 6; i++) {
                    if (this.notasPrim[i] < 5) {
                        var n = random(1, 10);
                        this.notasPrim[i] = n;
                    }
                }
                this.opor--;
            } while (this.opor > 0)
        } else if (this.curso == 2) {
            do {
                for (let i = 6; i < 11; i++) {
                    if (this.notasSeg[i] < 5) {
                        var n = random(1, 10);
                        this.notasSeg[i] = n;
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

for (var i = 0; i < clase.length; i++) {
    do {
        clase[i].opor = 2;
        clase[i].examen();
        clase[i].año++;
        clase[i].curso++;
    } while (clase[i].notasPrim.every(y => y < 5) && clase[i].notasSeg.every(y => y < 5))
}

console.log(clase);