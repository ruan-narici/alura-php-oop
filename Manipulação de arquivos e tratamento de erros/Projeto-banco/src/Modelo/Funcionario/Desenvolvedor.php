<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario {
    
    public function calculaBonificacao(): float {
        return $this->recuperaSalario() * 0.1;
    }

    public function sobeDeNivel(): void {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}

?>