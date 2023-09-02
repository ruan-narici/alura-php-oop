<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes {
    private float $totalBonificacoes;

    public function __construct() {
        $this->totalBonificacoes = 0;
    }

    public function adicionaBonificacao(Funcionario $funcionario) {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotalBonificacao(): float {
        return $this->totalBonificacoes;
    }
}

?>