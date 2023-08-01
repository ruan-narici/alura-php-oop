<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;

$titular = new Titular("Ruan Narici", new Cpf("000.000.000-00"), "EnderecoTitular");

echo $titular->recuperaNome() . " " . $titular->recuperaEndereco() . " " . $titular->recuperaCpf();

?>