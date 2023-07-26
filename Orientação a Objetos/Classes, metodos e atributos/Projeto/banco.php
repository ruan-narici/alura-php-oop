<?php

require_once 'Conta.php';

$primeiraConta = new Conta('Ruan Narici', '000.000.000-00');
$primeiraConta->depositar(10000);

$segundaConta = new Conta('Cinthia Oliveira', '111.111.111-11');
$segundaConta->depositar(10000);

$primeiraConta->transferir(2000, $segundaConta);
$segundaConta->sacar(2000);


var_dump($primeiraConta);
var_dump($segundaConta);

echo "Numero de contas: " . Conta::recuperaNumeroContas() . PHP_EOL;

?>