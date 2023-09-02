<?php

// Autoload
require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\Cpf;

$contaCorrente = new ContaCorrente(
        new Titular(
            "Ruan Narici", 
            new Cpf("000.111.222-00"), 
            "enderecoTitular"));

$contaCorrente->depositar(500);
$contaCorrente->sacar(100);
echo $contaCorrente->exibirNome() . ", Saldo: " . $contaCorrente->exibirSaldo() . PHP_EOL;

$contaPoupanca = new ContaPoupanca(
    new Titular(
        "Cinthia Oliveira", 
        new Cpf("111.222.333-44"), 
        "enderecoTitular2"));

$contaPoupanca->depositar(500);
$contaPoupanca->sacar(100);
echo $contaPoupanca->exibirNome() . ", Saldo: " .  $contaPoupanca->exibirSaldo() . PHP_EOL;
