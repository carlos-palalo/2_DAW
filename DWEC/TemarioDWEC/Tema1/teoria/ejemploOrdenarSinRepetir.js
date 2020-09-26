//Obtener elementos sin repetir y ordenados
var numeros = [4,0,3,4,11,7,3,5,8,1,8,0,2,3,1,2,5,7,3,2,5,1];
var num;
var nuevoArray = [];

while(numeros.length>0){
    num = numeros.pop();
    if(nuevoArray.indexOf(num)==-1){
        nuevoArray.push(num);
    }
}
nuevoArray.sort((a,b) => a-b);  //Ordenación numérica
console.log(nuevoArray)