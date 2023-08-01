<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;

require_once 'autoload.php';

$conta = new Conta(
        new Titular(
            "Ruan Narici", 
            new Cpf("000.111.222-00"), 
            "enderecoTitular"));

$conta->depositar(500);
$conta->sacar(100);
echo $conta->exibirSaldo() . PHP_EOL;