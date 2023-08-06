<?php

namespace Alura\Banco\Modelo;

interface Autenticavel {

    public function autentica(string $senha): bool;
}

?>