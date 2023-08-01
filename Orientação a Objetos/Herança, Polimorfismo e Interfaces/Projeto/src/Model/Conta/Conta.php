<?php

namespace Modelo\Conta;

class Conta {
    private Titular $titular;
    private float $saldo;

    private static int $numeroContas = 0;

    public function __construct(Titular $titular) {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroContas++;
    }

    public function __destruct() {
        echo $this->titular->recuperaNome() . " DEIXANDO DE EXISTIR DA MEMORIA." . PHP_EOL;
    }

    public function exibirNome(): string {
        return $this->titular->recuperaNome();
    }

    public function exibirCpf(): string {
        return $this->titular->recuperaCpf();
    }

    public function sacar(float $valor): void {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente!" . PHP_EOL;
            return;
        }

        $this->saldo -= $valor;
    }

    public function exibirSaldo(): float {
        return $this->saldo;
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

    public static function recuperaNumeroContas(): int {
        return self::$numeroContas;
    }
}
