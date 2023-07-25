<?php

require_once 'Conta.php';

$primeiraConta = new Conta();
$primeiraConta->defineNome('Ruan Narici');
$primeiraConta->defineCpf('000.000.000-00');
$primeiraConta->depositar(10000);

$segundaConta = new Conta();
$segundaConta->defineNome('Cinthia Oliveira');
$segundaConta->defineCpf('111.111.111-11');
// $segundaConta->depositar(10000);

// $primeiraConta->transferir(2000, $segundaConta);
// $segundaConta->sacar(2000);


var_dump($primeiraConta);
var_dump($segundaConta);

?>