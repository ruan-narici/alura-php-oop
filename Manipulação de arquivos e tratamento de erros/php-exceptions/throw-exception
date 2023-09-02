<?php

function funcao1():void {
    echo "Executando a funcao 1..." . PHP_EOL;
    try {
        funcao2();
    } catch(Exception $erro) {
        echo "# " . $erro->getMessage() . PHP_EOL;
    }
    echo "Funcao 1 finalizada!" . PHP_EOL;
}

function funcao2(): void {
    echo "Iniciando a funcao 2..." . PHP_EOL;
    throw new Exception("Erro ao iniciar a funcao 2", 1);
    echo "Funcao 2 finalizada!" . PHP_EOL;
}

echo "Programa iniciado..." . PHP_EOL;
funcao1();
echo "Programa finalizado!" . PHP_EOL;

?>