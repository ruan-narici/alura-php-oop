<?php

$arrayPessoa = [
    'nome' => 'Ruan',
    'idade' => 24
];

// Essa funcao cria variaveis com o nome da chave do array e atribui os mesmos
// valores a elas.
extract($arrayPessoa);
var_dump($nome, $idade);


// Essa funcao faz o contrario da extract, pois ela vai criar um array associativo
// com o nome da chave e atribuir os mesmos valores para elas
// * As variaveis deverao ser passadas como Strigns no parametro do compact
$nome2 = 'Cinthia';
$idade2 = 24;
var_dump(compact('nome2', 'idade2'));

?>