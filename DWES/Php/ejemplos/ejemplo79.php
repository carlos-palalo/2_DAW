<?php
# creamos una clase padre
class Padre
{
    function prueba()
    {
        echo "Esto está en la función prueba de la clase PADRE<br>";
    }
}
# creamos una clase extendida (Hija) con una funcion de igual nombre
# funcion ejemplo
class Hija extends Padre
{
    function prueba()
    {
        echo "Esto está en la función prueba de la clase HIJA<br>";
    }
    # creamos un nuevo objeto de la clase hija que invoque
    # ambas pruebas, la de la clase hija y la de la clase padre
    function ambas()
    {
        print "Ejecución de la función ambas<br>";
        # mediante $this-> requerimos la ejecución de metodo prueba
        # de la clase actual
        $this->prueba();
        # al señalar parent:: requerimos la ejecución de metodo prueba
        # de la clase padre
        parent::prueba();
    }
}
# creamos un objeto de la clase padre y por tanto invocará
# los métodos contenidos en esa clase sin considerar los de la
# clase extendida.
$objeto1 = new Padre();
print "<BR>Ejecutamos el método prueba().
El \$objeto1 utiliza la clase padre<br>";
$objeto1->prueba();
# creamos un nuevo objeto sobre la clase extendida.
# Podrán invocarse métodos de la clase padre y de la extendida
# pero si coinciden los nombres de esos métodos prevalecerá
# el de la clase extendida.
$objeto2 = new Hija();
print "<BR>Ejecutamos el método prueba().
El \$objeto2 utiliza la clase Hija<br>";
$objeto2->prueba();
print "<BR>Ejecutamos el método ambas()<br>";
# aquí invocamos otro método de la clase extendida
$objeto2->ambas();
# también podemos invocar el método de la clase que deseemos sin crear el objeto
print "<br>Ahora vamos a usar Padre::Prueba()<br>";
Padre::Prueba();
print "<br>Ahora vamos a usar Hija::Prueba()<br>";
Hija::Prueba();
