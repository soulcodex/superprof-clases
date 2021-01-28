<?php

// BASIC FUNCTIONS

/**
 * str_replace ("search", "replace", $textToProcess)
 */

$string = 'Mi nombre es Diego';

$stringNew = str_replace('Diego', 'Pablo', $string);

echo "El string original es: $string";

echo "El string con reemplazo es: $stringNew";

/**
 * strtolower("text to transform") && strtoupper("text to transform")
 */

$stringUpper = 'VAMOS A PONER EN MINUSCULAS ESTE TEXTO';

$stringLower = 'vamos a poner en mayusuculas este texto';

echo strtolower($stringUpper);

echo strtoupper($stringLower);

/**
 * count_chars ("text to count", COUNT_OPTION )
 *
 * 0: se devolverá un array con el valor numérico ascii como índice
 * y la frecuencia de cada carácter ascii como valor.
 *
 * 1: se devolverá un array con el valor numérico ascii como índice
 * y la frecuencia de cada carácter que aparezca al menos una vez como valor.
 *
 * 2: se devolverá un array de caracteres que no aparecen en la cadena, con el
 * valor numérico ascii como índice y la frecuencia de cada carácter ascii
 * que no aparece como valor.
 *
 * 3: devuelve una cadena que contiene todos los caracteres únicos.
 *
 * 4: devuelve una cadena que contiene todos los caracteres no utilizados.
 */

$chain = 'Habia una vez una casa grande a las afueras de Londres';
$result = count_chars($chain, COUNT_NORMAL);
print_r($result);

/**
 * substr_count("text to perform count", "searched value")
 */

$chain1 = 'Pedro Juan Luis Marco Luis Pedro Juan Luis Pedro';
$chain2 = 'Luis';
echo substr_count($chain1, $chain2);

/**
 * str_len("text to count")
 */

$chain = 'Tres tristes tigres comen tigre en un trigal';
echo strlen($chain);

/**
 * strpos("text to perform the search", "text to search")
 */

$result = strpos($chain1, $chain2);
echo $result;

/**
 * trim($text)
 */

$text = "*** Today is friday ***";
echo trim($text, "*");

/**
 * str_repeat($textToRepeat)
 */

$textToRepeat = "Hello World";
echo str_repeat($textToRepeat, 3);

/**
 * str_pad($textToRepeat, $times, $charToMakePad, $padOptions)
 */
$cadena='Hello World';

echo '<p>'.str_pad($cadena,28,'*').'</p>';

echo '<p>'.str_pad($cadena,48,'cool!').'</p>';

echo '<p>'.str_pad($cadena,2,'a').'</p>';

echo '<p>'.str_pad($cadena,28,'*',STR_PAD_RIGHT).'</p>';

echo '<p>'.str_pad($cadena,29,'@',STR_PAD_BOTH).'</p>';