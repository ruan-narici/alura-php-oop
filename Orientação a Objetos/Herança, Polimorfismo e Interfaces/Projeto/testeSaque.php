<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;

require_once 'autoload.php';

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
