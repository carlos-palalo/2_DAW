//lenguaje_15.js - Función isNaN

console.log("1 --> " + isNaN(123)); //False
console.log("2 --> " + isNaN(-1.23)); //False
console.log("3 --> " + isNaN(5-2)); //False
console.log("4 --> " + isNaN(0)); //False
console.log("5 --> " + isNaN('123')); //False
console.log("6 --> " + isNaN('Hello')); //True
console.log("7 --> " + isNaN('2005/12/12')); //True
console.log("8 --> " + isNaN('')); //False
console.log("9 --> " + isNaN(true)); //False
console.log("10 --> " + isNaN(undefined)); //True
console.log("11 --> " + isNaN('NaN')); //True
console.log("12 --> " + isNaN(NaN)); //True
console.log("13 --> " + isNaN(0 / 0)); //True
console.log("14 --> " + isNaN(null)); //False