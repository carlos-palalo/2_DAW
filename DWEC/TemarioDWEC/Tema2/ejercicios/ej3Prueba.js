var aula = {};

console.log(aula);
console.log(typeof (aula));

Object.defineProperty(aula, 'numeroPupitres', { value: '16', enumerable: true });
aula.numeroAlumnos = 12;
Object.defineProperties(aula, {
    superficie: {
        value:60,
        enumerable:true
    },
    nombre: {
        value:"INFO",
        enumerable: false
    }
});

console.log("\n*******************\n");
console.log(aula);