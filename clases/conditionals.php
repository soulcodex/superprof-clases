<?php

$boolOne = true;
$boolTwo = false;

// IF
if($boolOne) {
    return 'dd';
    echo 'ddd';
}

// IF ELSE
if($boolTwo) {
    $var = 0;
    if($boolOne){
        $var = 1;
    }
    // BLOQUE DE EJECUCION
} else {
    //
}

// IF ELSEIF
if($boolOne) {
   //
} elseif($boolTwo) {
    //
} elseif(false) {
    //
} else {
    //
}

// SWITCH
const TYPE = 'FOOD';

switch (TYPE) {
    case 'FOOD':
        echo 'FOOD';
        break;
    case 'MEET':
        echo 'MEET';
        break;
    case 'HOUSE':
        echo 'HOUSE';
        break;
    default:
        break;
}