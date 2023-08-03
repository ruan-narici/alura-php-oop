<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Servico\ControladorDeBonificacoes;

$umFuncionario = new Funcionario("Ruan Narici", new Cpf("123.456.789-10"), "Desenvolvedor", 5000);
$umaFuncionaria = new Funcionario("Cinthia Oliveira", new Cpf("987.654.321-00"), "Desenvolvedora", 8000);

$calculadorBonificacao = new ControladorDeBonificacoes();
$calculadorBonificacao->adicionaBonificacao($umFuncionario); // 500
$calculadorBonificacao->adicionaBonificacao($umaFuncionaria); // 800

echo $calculadorBonificacao->recuperaTotalBonificacao() . PHP_EOL; // 1300

?>