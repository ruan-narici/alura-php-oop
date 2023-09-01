<?php

function funcao1() {
    echo "Entrando na funcao 1" . PHP_EOL;
    funcao2();
    echo "Saindo da funcao 1" . PHP_EOL;
}

function funcao2() {
    echo "Entrando na funcao 2" . PHP_EOL;
    for($i = 0; $i < 5; $i++) {
        echo "$i" . PHP_EOL;
    }
    echo "Saindo da funcao 2" . PHP_EOL;
}

echo "Iniciando o programa" . PHP_EOL;
funcao1();
echo "Encerrando o programa" . PHP_EOL;

?>