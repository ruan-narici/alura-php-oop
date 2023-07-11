<?php

$email = 'ruan123@gmail.com';

echo substr($email, 0, 7) . PHP_EOL;
echo substr($email, 7) . PHP_EOL;

$email2 = 'ruan777@gmail.com';

// Capturando o indice do arroba
$indiceArroba = strpos($email2, '@', 0);

// Exibindo o que tem depois do @ 
echo substr($email2, $indiceArroba +1);

?>