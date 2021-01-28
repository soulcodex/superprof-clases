<?php

// DRY - dont repeat yourself

// TYPE HINT - mixed
// ANON FUNCTIONS
$fn = function($name){
   return [$name];
};

is_null(null);
$fn('Jose');

// SCOPE FUNCTIONS

$names = ['Pablo', 'Roberto', 'Luis'];

$fa = function(string $name) use ($names) {
    // SCOPE LOCAL DE FUNCION

    $names[] = $name;

    var_dump($names);
};

$fa('Jose');

// CLOSURES

// $callback -> function

$func = function(\Closure $fa) {
    // SCOPE LOCAL
    return $fa('Alfredo');
};

$func($fa);

