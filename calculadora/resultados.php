<?php
require 'calculadora.php';
// llamada ffactorial
$numero= filter_input(INPUT_POST, 'number', FILTER_SANITIZE_SPECIAL_CHARS);
if (isset($numero)) {
    $resultado = ffactorial($numero);
    echo "<p>Factorial de $numero  = $resultado.</p>";
}

// llamada fsuma
$num1 = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_SPECIAL_CHARS);
$num2 = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($num1,$num2)) {
    $resultado = fsuma($num1,$num2);
echo "La suma de los números ". $num1 . " y " . $num2 . " del interior del array da " . $resultado.".";
}

// llamada fprimer
$number = filter_input(INPUT_POST, 'numprim', FILTER_SANITIZE_SPECIAL_CHARS);
if (isset($number)) {
    $resultado = fprimer($number); 
    if($resultado == true){
    echo "El número ".$number. " es primo.";
    }else{
    echo "El número ". $number . " no es primo.";
    }
}

// llamar performOperation
    performOperation();
