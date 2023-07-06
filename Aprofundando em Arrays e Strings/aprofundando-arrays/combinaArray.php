<?php

$primeiroArray = [
    24,
    24,
    44,
    6
];

$segundoArray = [
    'Ruan',
    'Cinthia',
    'Nayara',
    'Kira'
];

// Combina arrays, usando um como chave e o outro como valor ( se possuir a  mesma chave, o valor sera sobrescrito);
$arrayCombinado = array_combine($primeiroArray, $segundoArray);
var_dump($arrayCombinado);

// Juntando arrays com a funcao array_merge
// Se eu tiver chaves em string, as que forem definidas aqui vão sobrescrever as que tiverem sido definidas
$arrayJunto = array_merge($primeiroArray, $segundoArray);
var_dump($arrayJunto);

// Juntando arrays com o Spread operator
$arrayJuntoSpread = [...$primeiroArray, ...$segundoArray];
var_dump($arrayJuntoSpread);

?>