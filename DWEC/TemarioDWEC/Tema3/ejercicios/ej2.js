var texto = '{"name":"julian","apellido1":"palacios","apellido2":"alonso"}';

var obj = JSON.parse(texto, function (key, value) {
    if (typeof (value) === "string")
        return value.toUpperCase();
    return value;
});

console.log(obj);