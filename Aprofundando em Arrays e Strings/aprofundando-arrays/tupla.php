<?php

$arrayTupla = [
    'Ruan',
    'Masculino',
    24
];

// Adicionando os valores do array para uma variavel e dando significado a eles

// 1 - Incomum:
$nome = $arrayTupla[0];
$sexo = $arrayTupla[1];
$idade = $arrayTupla[2];
var_dump($nome, $sexo, $idade);

echo PHP_EOL;
// 2 - Comum:
list($nome1, $sexo1, $idade1) = $arrayTupla;
var_dump($nome1, $sexo1, $idade1);

echo PHP_EOL;
// 3 - Mais utilizado:
[$nome2, $sexo2, $idade2] = $arrayTupla;
var_dump($nome2, $sexo2, $idade2);

echo PHP_EOL;
// Utilizando a tupla em um array associativo com chaves Strings: 
$arrayTupla2 = [
    'nome' => 'Nayara',
    'sexo' => 'Feminino',
    'idade' => 44
];

['nome' => $nome3, 'sexo' => $sexo3, 'idade' => $idade3] = $arrayTupla2;
var_dump($nome3, $sexo3, $idade3);

?>