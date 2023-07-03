<?php

function exibeMensagem(string $mensagem): void {
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor): array {
    if ($valor <= $conta['saldo']) {
        $conta['saldo'] -= $valor;
    } else {
        echo $conta['titular'] . ", você não possui saldo suficiente." . PHP_EOL;
    }
    return $conta;
}

function depositar(array $conta, float $valor): array {
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    } else {
        echo "Valor inválido!";
    }
    return $conta;
}

?>