<?php

//Adicionando somente uma vez esse arquivo de funcoes. Caso nao localize, vai gerar um erro.
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

//Aplicando o uppercase
titularComLetraMaiuscula($contasCorrentes['12320219232']);

//Removendo uma conta da lista
unset($contasCorrentes['34920193291']);

// echo "<ul>";
// foreach ($contasCorrentes as $cpf => $conta) {
// list('titular' => $titular, 'saldo' => $saldo) = $conta;
// ['titular' => $titular, 'saldo' => $saldo] = $conta;


// // exibeMensagem("
// // {$cpf}  - {$conta['titular']} {$conta['saldo']}
// // ");

// exibeMensagem("
// $cpf $titular $saldo
// ");

// exibeConta($conta);
// }
// echo "</ul>";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta corrente</title>
</head>

<body>
    <h1>Contas Correntes</h1>
    <table border="1">
        <thead>
            <tr>
                <th scope="col"><h3>Titular</h3></th>
                <th scope="col"><h3>Saldo</h3></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
                <tr>
                    <th scope="row"><?= $conta['titular'] ?></th>
                    <th scope="row"><?= $conta['saldo'] ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>