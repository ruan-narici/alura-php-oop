<?php

$usuario = 'ruan';
$usuario2 = 'cínthia';

// Transformando em uppercase
$usuarioUpper = strtoupper($usuario);
$usuario2Upper = strtoupper($usuario2);

// Podemos perceber que o strtoupper nao trata caracteres com mais de um bit.
echo $usuarioUpper . PHP_EOL . $usuario2Upper . PHP_EOL;


// Vamos verificar quantos bit tem o caracter especial 'í'
echo strlen("í") . PHP_EOL;
// Foi possivel verificar que o tamanho de bit de caracteres especiais é maior 
// que 1.

// Para podermos contornar esse problema, iremos usar o mbstring (multibyte  string)

$usuarioUpper = mb_strtoupper($usuario);
$usuario2Upper = mb_strtoupper($usuario2);

// Podemos perceber que com o mb_strtoupper a conversao para uppercase foi 100%
echo $usuarioUpper . PHP_EOL . $usuario2Upper . PHP_EOL;

// Vamos verificar quantos bit tem o caracter especial 'í' usando o mb_strlen
echo mb_strlen("í") . PHP_EOL;
// Foi possivel verificar que o tamanho de bit de caracteres especiais é 1

?>