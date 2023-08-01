<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta{
    public function __construct(Titular $titular) {
        parent::__construct($titular);
    }

    public function sacar(float $valor): void {
        $tarifa = 0.03;
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente!" . PHP_EOL;
            return;
        }

        $this->saldo -= $valor + ($tarifa * $valor);
    }
}

?>