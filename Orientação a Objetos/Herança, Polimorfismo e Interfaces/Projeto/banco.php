<?php

require_once 'autoload.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/Cpf.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;

$titular = new Titular("Ruan Narici Mendonca", new Cpf("111.111.111-11"), "Endereco");
echo $titular->recuperaNome();

?>