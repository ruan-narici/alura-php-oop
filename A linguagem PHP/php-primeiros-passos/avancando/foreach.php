<?php

//Arrays associativos
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

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " - " . $conta['titular'] . PHP_EOL;
}

?>
