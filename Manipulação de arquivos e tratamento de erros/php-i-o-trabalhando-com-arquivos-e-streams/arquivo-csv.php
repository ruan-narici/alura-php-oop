<?php

$meusCursos = file(__DIR__ . "/listaCursos.txt");
$outrosCursos = file(__DIR__ . "/escritorCursos.txt");

$arquivo = fopen(__DIR__ . "/arquivoCsv.csv", "w");
fputcsv($arquivo, ["Nome do Curso", "Aula feita por mim"], ";");

foreach($meusCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), "sim"];

    fputcsv($arquivo, $linha, ";");
};

foreach($outrosCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), "nao"];

    fputcsv($arquivo, $linha, ";");
};


fclose($arquivo);

echo utf8_encode(file_get_contents(__DIR__ . "/arquivoCsv.csv"));

?>