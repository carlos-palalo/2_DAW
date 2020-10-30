<html>

<head>
    <script language="JavaScript">
        var reloj = 0;
        var frecuencia = 5000;

        function actualiza() {
            var son = new Date();
            var fecha = son.getDate() + " - " + (son.getMonth() + 1) + " - " + son.getFullYear();
            var hora = son.getHours() + ":" + son.getMinutes() + ":" + son.getSeconds();
            var escribe = 'Hoy es ' + fecha + ' y son las ' + hora + ' horas';
            var situa = document.getElementById('capa0');
            situa.innerHTML = escribe;
            reloj = setTimeout("actualiza()", frecuencia);
        }
    </script>
</head>

<body onLoad="actualiza()" ;>
    <div id="capa0">
    </div>
</body>

</html>