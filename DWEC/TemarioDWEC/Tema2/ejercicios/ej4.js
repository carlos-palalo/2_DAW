//Paso por el ribera de castilla (Expediente Académico). Número convocatorias (2 por año), jun-sept y mar-jun
//Hacer un examen de cada asignatura, numero aleatorio entre 1 y 10, si es mayor que 5, modulo aprobado
//Empezamos en 2019
//Se acaba cuando todos hemos sacado el titulo

function Estudiante(nombre) {
    this.nombre = nombre;
    primero = {
        "PROG" : {
            nota:0,
            horas_semanales:8
        },
        "BBDD" : {
            nota:0,
            horas_semanales:8
        },
    }
    this.segundo = [];

}