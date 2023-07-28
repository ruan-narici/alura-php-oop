<?php

class Titular extends Pessoa{
    private String $endereco;

    public function __construct(string $nome, Cpf $cpf, string $endereco) {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): String {
        return $this->endereco;
    }
}

?>