<?php

$texto = "Teste palavrao 123";

echo $texto . PHP_EOL;

//Substituindo uma palavra com o str_replace.
$texto = str_replace("palavrao", " @#$", $texto);

echo $texto . PHP_EOL;
?>
