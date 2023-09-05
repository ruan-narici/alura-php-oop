<?php

class ExceptionCriada extends Exception {
    public function exibeNomeRuan(): void {
        echo "Ruan" . PHP_EOL;
    }
}

try {
    throw new ExceptionCriada("Excecao ao executar o main");
} catch (Exception $expcetion) {
    echo $expcetion->getMessage() . PHP_EOL;
}

?>