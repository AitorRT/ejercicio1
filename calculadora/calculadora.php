<?php
declare(strict_types=1);
// función para obtener factorial 
function ffactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 

// funció que retornarà la suma dels números d’entrada
function fsuma($number, $number2){
  $result = [$number, $number2];
  $suma = array_sum($result);
  return $suma;
}
   


/* funció que avaluarà l'entrada $number, que ha de ser un enter
 i que retornarà si el nombre és un nombre primer o no.
  El tipus de retorn d'aquesta funció és un booleà ( bool). */

  function fprimer($number):bool{
      if ($number == 2 || $number == 3 || $number == 5 || $number == 7) {
        return True;
      } else {
      // comprobamos si es par
        if ($number % 2 != 0) {
            // comprobamos solo por los impares
            for ($i = 3; $i <= sqrt($number); $i += 2) {
                if ($number % $i == 0) {
                    return False;
                }
            }
            return True;
        }
    }
    return False;
  }

/*   funció base performOperation  que manejarà les 
operacions matemàtiques predefinides. */

function performOperation(){
  $operacion = $_GET['type_oper'];
  $numbers = $_GET['valuenum'];
  $numbers2 = $_GET['valuenum2'];

  if ($operacion == "Factorial"){
    $resultado = ffactorial($numbers);
    echo "el factorial de " . $numbers . " = " . $resultado;
  }else if($operacion == "Suma"){
    $resultado = fsuma($numbers, $numbers2); 
    echo "La suma da un total de " . $resultado;
  }else if($operacion == "Primero"){
    $resultado = fprimer($numbers); 
    if($resultado == true){
      echo "El número es primo";
    }else{
        echo "El número no es primo";
      }
  }
}