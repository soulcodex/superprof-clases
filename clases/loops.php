<?php


// for

$elements = range(1, 10);

echo 'BUCLE FOR GENERADO';
for($num = 1; $num <= 10; $num++) {
    var_dump($num);
}

echo 'BUCLE FOR PARA ACCEDER A ELEMENTOS DE UN ARRAY';
for($num = 1; $num <= count($elements) - 1; $num++) {
    var_dump($elements[$num]);
}

// foreach

echo 'BUCLE FOREACH RECORRER VALOR';
foreach ($elements as $element) {
    var_dump($element);
}

echo 'BUCLE FOREACH RECORRER LLAVE Y VALOR';
foreach ($elements as $elementKey => $elementValue) {
    var_dump("KEY: $elementKey ---- VALOR: $elementValue");
}

// while

/**
 * Debemos tener especial cuidado con los bucles
 * while y do..while si no se controla correctamente
 * el acumulador podriamos ocasionar un bucle infinito
 * y que la aplicacion colisione o la ejecucion del programa.
 */

$accumulative = 0; // Inicializamos la variable
while ($accumulative < 10) {
    echo "VALOR: <b>$accumulative</b>"; // Imprimimos el valor
    $accumulative++; // Aumentamos el acumulador
}
echo "El bucle while acabo en el numero $accumulative";

// do while

$cookies = 0;
do{
    echo "Se han comido la galleta número: $cookies";
    $cookies++;
}while($cookies < 10);

/**
 * EJERCICIOS
 *
 * 1) Un bucle do…while que cuente desde 50 hasta 40 (fíjate que en este caso es decreciente)
 *
 * 2) Un bucle do…while que a partir de una variable $contador que toma valores de 1 a 5,
 * muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.
 *
 * 3) Un bucle for que cuente desde 50 hasta 40 (fíjate que en este caso es decreciente).
 *
 * 4) Un bucle for que a partir de una variable $contador que toma valores de 1 a 5,
 * muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.
 *
 * 5) Un bucle for que cuente desde 50 hasta 500 de 25 en 25.
 *
 * 6) Un bucle for que a partir de una variable de control $j que toma valores de 100 a 500 de 100 en 100,
 * muestre por pantalla el resultado de dividir la variable de control por 20. En este caso, el resultado
 * será 5 (que es 100/20…), 10 (que es 200/20…), 15, 20, 25.
 *
 * TIPS
 *
 * # Recuerda repasar y revisar que son arrays asociativos y como funcionan en si los arrays.
 *
 * # No olvides nunca el contador en las estructuras iterativas de control que dependen el fin de
 * su ejecucion de esta variable.
 *
 * # Recuerda como se compone una funcion y como se declara
 *
 * function <nombre-funcion>(<parametros>) {
 *      <cuerpo-de-la-funcion>
 * }
 *
 * Tambien puedes asegurar el tipo del valor de retorno de una funcion añadiendolo antes de la apaertura de llaves
 * tal que (int, float, bool, object, double, ClassName, etc):
 *
 * !!! PHP version >5
 * function <nombre-funcion>(<parametros>): <valor-de-retorno> {
 *      <cuerpo-de-la-funcion>
 * }
 *
 * # Recuerda los scope de las funciones y cuando puedes o no acceder al valor de una variable.
 *
 */



