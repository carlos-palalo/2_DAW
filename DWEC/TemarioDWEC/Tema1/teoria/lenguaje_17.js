//lenguaje_17.js - Operadores

var v1,v2,v3;

//Aritméticos y de asignación
v1 = 16;
v2 = 7;

v3=v1+v2;console.log(v1+ " + "+v2+" = "+v3);
v3=v1-v2;console.log(v1+ " - "+v2+" = "+v3);
v3=v1*v2;console.log(v1+ " * "+v2+" = "+v3);
v3=v1/v2;console.log(v1+ " / "+v2+" = "+v3);
v3=v1%v2;console.log(v1+ " % "+v2+" = "+v3);
console.log(v1++);
console.log(v1--);
console.log(++v1);
console.log(--v1);
v1+=v2;console.log("16+=7="+v1);v1=16;
v1-=v2;console.log("16-=7="+v1);v1=16;
v1*=v2;console.log("16*=7="+v1);v1=16;
v1/=v2;console.log("16/=7="+v1);v1=16;
v1%=v2;console.log("16%=7="+v1);


var c1,c2,c3;
//Concatenación de cadenas
c1 = "hola";
c2 = "adios";

c3 = c1 + c2;
console.log(c3);

c1+=c2; //Esto es lo mismo que c1=c1+c2
console.log(c1);

			
//Algunas cuestiones
v1 = '10';
v2 = 2;
console.log("'10'+2=" + v1+v2);

v1 = 7; //Alternar con 0
v2 = 0;
console.log("7/0=" + v1/v2);
console.log("7/0=" + isNaN(v1/v2));

v1 = "30";
v2 = "5";
console.log("30+5=" + v1+v2);
console.log("30-5=" + v1-v2);
console.log("30*5=" + v1*v2);
console.log("30/5=" + v1/v2);
v2=7;
console.log("30%7=" + v1%v2);