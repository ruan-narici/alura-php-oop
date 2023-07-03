<?php

require_once 'funcoes.php';


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

$contasCorrentes['12320219232'] = sacar($contasCorrentes['12320219232'], 500);

$contasCorrentes['34920193291'] = depositar($contasCorrentes['34920193291'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("
    {$cpf}  - {$conta['titular']} {$conta['saldo']}
    ");
}
