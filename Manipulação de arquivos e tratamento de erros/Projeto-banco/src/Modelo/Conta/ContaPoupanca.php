<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta{
    public function __construct(Titular $titular) {
        parent::__construct($titular);
    }

    protected function percentualTarefa(): float {
        return 0.03;
    }
}

?>