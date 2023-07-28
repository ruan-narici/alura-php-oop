<?php

require_once 'Pessoa.php';
require_once 'Cpf.php';
require_once 'Titular.php';


$titular = new Titular("Ruan Narici", new Cpf("000.000.000-00"), "EnderecoTitular");

echo $titular->recuperaNome() . " " . $titular->recuperaEndereco() . " " . $titular->recuperaCpf();

?>