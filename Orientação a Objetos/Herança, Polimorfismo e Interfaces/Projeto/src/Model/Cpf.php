<?php

namespace Modelo;
class Cpf {
    private String $numero;

    public function __construct(String $numero) {
        $this->numero = $numero;
    }

    public function recuperaNumeroCpf(): String {
        return $this->numero;
    }
}

?>