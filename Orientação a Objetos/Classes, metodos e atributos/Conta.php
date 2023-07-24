<?php

class Conta {
    public String $nome;
    public String $cpf;
    public float $saldo;

    public function sacar(float $valor): void {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente!" . PHP_EOL;
            return;
        }

        $this->saldo -= $valor;
    }

    public function depositar(float $valor): void {
        if ($valor < 0) {
            echo "O valor deve ser maior que 0." . PHP_EOL;
            return;
        }

        $this->saldo += $valor;
    }

    public function transferir(float $valor, Conta $conta): void {
        if ($valor < 0 || $valor > $this->saldo) {
            echo "O valor deve ser maior que 0 ou superior ao seu saldo." . PHP_EOL;
            return;
        }

        $this->saldo -= $valor;
        $conta->depositar($valor);
    }
}

$primeiraConta = new Conta();
$primeiraConta->nome = 'Ruan Narici';
$primeiraConta->cpf = '000.000.000-00';
$primeiraConta->saldo = 10000;

$segundaConta = new Conta();
$segundaConta->nome = 'Cinthia Oliveira';
$segundaConta->cpf = '111.111.111-11';
$segundaConta->saldo = 10000;

$primeiraConta->transferir(2000, $segundaConta);
$segundaConta->sacar(2000);


var_dump($primeiraConta);
var_dump($segundaConta);

?>
