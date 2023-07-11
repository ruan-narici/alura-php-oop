<?php

$alunos2022 = [
    'Ruan',
    'Cinthia',
    'Nayara',
    'Kira'
];

// ###########################################################################

// Adiciona elementos no inicio de um Array
echo "Adiciona elementos no inicio de um Array" . PHP_EOL;
array_unshift($alunos2022, 'Naya');
var_dump($alunos2022);

// Remove e retorna elementos no inicio de um Array
echo "Remove e retorna elementos no inicio de um Array" . PHP_EOL;
echo array_shift($alunos2022) . PHP_EOL;
var_dump($alunos2022);

// Remove e retorna elementos no fim de um Array
echo "Remove e retorna elementos no fim de um Array" . PHP_EOL;
echo array_pop($alunos2022) . PHP_EOL;
var_dump($alunos2022);

?>