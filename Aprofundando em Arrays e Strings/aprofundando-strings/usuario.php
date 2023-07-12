<?php

$email = 'ruan123@gmail.com';

echo substr($email, 0, 7) . PHP_EOL;
echo substr($email, 7) . PHP_EOL;

$email2 = 'ruan777@gmail.com';

// Capturando o indice do arroba
$indiceArroba = strpos($email2, '@', 0);

// Exibindo o que tem depois do @ 
echo substr($email2, $indiceArroba +1) . PHP_EOL;


$pessoa = 'Ruan Narici Mendonça';
// Fazendo com que a variavel $pessoa seja partida em varios pedaços, separados
// por espaço e atribuindo esses valores a outras variaveis atraves do list();

list($primeiroNome, $segundoNome, $terceiroNome) = explode(' ', $pessoa );

echo "Nome: $primeiroNome; Sobrenome: $segundoNome $terceiroNome;" . PHP_EOL;

?>
