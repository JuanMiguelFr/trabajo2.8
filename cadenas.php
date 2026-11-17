<?php

function contarCaracteres($cadena) {
    return strlen($cadena);
}

function convertirMayusculas($cadena) {
    return strtoupper($cadena);
}

function convertirMinusculas($cadena) {
    return strtolower($cadena);
}

function invertirCadena($cadena) {
    return strrev($cadena);
}
function esPalindromo($cadena) {
    $minusculas = strtolower(str_replace(' ', '', $cadena));
    $invertida = strrev($minusculas);

    if ($minusculas == $invertida)
        return "Si es palindromo";
    else
        return "No es palindromo";
}

function contarVocales($cadena) {
    $contador = 0;
    $texto = strtolower($cadena);
    
    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];
        if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
            $contador++;
        }
    }
    return $contador;
}
?>