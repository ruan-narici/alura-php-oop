<?php

$texto = <<<FIM
    ESSE É UM TESTE
1234
        TESTANDO.
FIM;

echo $texto . PHP_EOL;

$texto2 = <<<"FIM"

$texto
            Variavel invocada atraves do herodoc

FIM;

echo $texto2 . PHP_EOL;
?>