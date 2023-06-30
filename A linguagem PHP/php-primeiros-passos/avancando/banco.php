<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valor) {
    if ($valor <= $conta['saldo']) {
        $conta['saldo'] -= $valor;
    } else {
        echo $conta['titular'] . ", você não possui saldo suficiente." . PHP_EOL;
    }
    return $conta;
}

$contasCorrentes = [
    //Alterando a chave para o valor do array associativo
    //Essa chave tambe e o indice.
    12320219232 => [
        'titular' => 'Ruan',
        'saldo' => 1000
    ],
    34920193291 => [
        'titular' => 'Cinthia',
        'saldo' => 2000
    ], 
    29401923042 => [
        'titular' => 'Nayara',
        'saldo' => 3000
    ]
];

$contasCorrentes['12320219232'] = sacar($contasCorrentes['12320219232'], 1500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " - " . $conta['titular'] . " " . $conta['saldo']);
}

?>