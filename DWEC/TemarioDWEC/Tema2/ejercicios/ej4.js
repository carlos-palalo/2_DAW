//Paso por el ribera de castilla (Expediente Académico). Número convocatorias (2 por año), jun-sept y mar-jun
//Hacer un examen de cada asignatura, numero aleatorio entre 1 y 10, si es mayor que 5, modulo aprobado
//Empezamos en 2019
//Se acaba cuando todos hemos sacado el titulo

function Estudiante(nombre) {
    this.nombre = nombre;
    primero = {
        "PROG": {
            nota: 0,
            horas_semanales: 8
        },
        "BBDD": {
            nota: 0,
            horas_semanales: 6
        },
        "ENT": {
            nota: 0,
            horas_semanales: 3
        },
        "LMAR": {
            nota: 0,
            horas_semanales: 4
        },
        "FOL": {
            nota: 0,
            horas_semanales: 3
        },
        "SIS": {
            nota: 0,
            horas_semanales: 6
        }
    };
    segundo = {
        "DWEC": {
            nota: 0,
            horas_semanales: 8
        },
        "DWES": {
            nota: 0,
            horas_semanales: 9
        },
        "DAW": {
            nota: 0,
            horas_semanales: 4
        },
        "DINT": {
            nota: 0,
            horas_semanales: 6
        },
        "EIE": {
            nota: 0,
            horas_semanales: 3
        },
        "Proyecto": {
            nota: 0
        },
        "Formación Centro Trabajo": {
            nota: 0,
        },
    };

}