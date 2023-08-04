<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario {

    private string $senha = '1234';

    public function calculaBonificacao(): float {
        return $this->recuperaSalario() * 2;
    }

    public function autentica(string $senha): bool {
        return $senha == $this->senha;
    }
}

?>