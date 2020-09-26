//lenguaje_14.js - Conversiones de tipo
			
var v1="5.2";
console.log(v1+" es de tipo "+typeof(v1));
v1=parseFloat(v1);
console.log(v1+" es de tipo "+typeof(v1));
console.log("\n");

var v2="5.2";
console.log(v2+" es de tipo "+typeof(v2));
v2=parseInt(v2);
console.log(v2+" es de tipo "+typeof(v2));
console.log("\n");

var v3="1010110";
console.log(v3+" es de tipo "+typeof(v3));
v3=parseInt(v3,2);
console.log(v3+" es de tipo "+typeof(v3));
console.log("\n");

var v4="FF";
console.log(v4+" es de tipo "+typeof(v4));
v4=parseInt(v4,16);
console.log(v4+" es de tipo "+typeof(v4));
console.log("\n");

var v5=564;
console.log(v5+" es de tipo "+typeof(v5));
v5=v5.toString();
console.log(v5+" es de tipo "+typeof(v5));
console.log("\n");

var v6=false;
console.log(v6+" es de tipo "+typeof(v6));
v6=v6.toString();
console.log(v6+" es de tipo "+typeof(v6));
console.log("\n");

var v7=false;
console.log(v7+" es de tipo "+typeof(v7));
v7=parseInt(v7);
console.log(v7+" es de tipo "+typeof(v7));
console.log("\n");

var v8="234";
console.log(v8+" es de tipo "+typeof(v8));
v8=Number(v8);
console.log(v8+" es de tipo "+typeof(v8));
console.log("\n");		

var v9=true;
console.log(v9+" es de tipo "+typeof(v9));
v9=Number(v9);
console.log(v9+" es de tipo "+typeof(v9));
console.log("\n");

var v10=false;
console.log(v10+" es de tipo "+typeof(v10));
v10=Number(v10);
console.log(v10+" es de tipo "+typeof(v10));
console.log("\n");

var v11="12 34";
console.log(v11+" es de tipo "+typeof(v11));
v11=Number(v11);
console.log(v11+" es de tipo "+typeof(v11));
console.log("\n");

var v12="vxxcvxc";
console.log(v12+" es de tipo "+typeof(v12));
v12=parseFloat(v12);
console.log(v12+" es de tipo "+typeof(v12));
console.log("\n");