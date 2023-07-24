<?php

class Conta {
    public String $nome;
    public String $cpf;
    public float $saldo;
}

$primeiraConta = new Conta();
$primeiraConta->nome = 'Ruan Narici';
$primeiraConta->cpf = '000.000.000-00';
$primeiraConta->saldo = 10000;

var_dump($primeiraConta);

?>
