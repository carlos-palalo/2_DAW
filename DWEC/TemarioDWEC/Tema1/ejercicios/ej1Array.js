//tenemos dos arrays con numeros
//tenemos que definir cuantas posiciones coinciden y cuantas no
var num1 = [1,2,3,4,5,6,7];
var num2 = [1,8,3,4,9,6,5];
var cont = 0;
var resto;

console.log("Array 1:");
console.log(num1);
console.log("Array 2:");
console.log(num2);

for(var i=0; i<num1.length; i++){
    if(num1[i]==num2[i]){
        cont++;
    }
}

resto = num1.length-cont;

console.log("Coinciden "+cont+" veces en la posición y el número.");
console.log("No coinciden "+resto+" veces en la posición y el número.")