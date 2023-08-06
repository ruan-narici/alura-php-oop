<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, EditorVideo, Gerente};
use Alura\Banco\Servico\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor("Ruan Narici", new Cpf("123.456.789-10"), 5000);
$umaFuncionaria = new Gerente("Cinthia Oliveira", new Cpf("987.654.321-00"), 8000);
$umaFuncionariaEditoraVideo = new EditorVideo("Nayara", new Cpf("123.654.332-00"),  8000);

$umFuncionario->sobeDeNivel();

$calculadorBonificacao = new ControladorDeBonificacoes();
$calculadorBonificacao->adicionaBonificacao($umFuncionario); // 500
$calculadorBonificacao->adicionaBonificacao($umaFuncionaria); // 8000

echo $calculadorBonificacao->recuperaTotalBonificacao() . PHP_EOL; // Com sobe de nivel = 8875, sem ele fica 8500

?>