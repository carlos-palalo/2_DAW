//Comprobar que todos los elementos de un array son de tipo Number
var vector = [1,2,3,'1','2',4,7];

console.log(vector.every(function(num){
            return isNaN(num);
        }
    )
)