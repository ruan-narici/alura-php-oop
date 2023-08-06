<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel{

    public function calculaBonificacao(): float {
        return $this->recuperaSalario();
    }

    public function autentica(string $senha): bool {
        return $senha == 'abc';
    }
}

?>