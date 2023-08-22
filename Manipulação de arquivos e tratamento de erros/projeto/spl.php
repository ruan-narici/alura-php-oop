<?php

$arquivo = new SplFileObject(__DIR__ . "/arquivoCsv.csv", "r");

while (!$arquivo->eof()) {
    $linha = $arquivo->fgetcsv(";");
    echo utf8_encode($linha[0]) . PHP_EOL;
}

$date = new DateTime();

$date->setTimestamp($arquivo->getCTime());

echo "DATA DE CRIACAO: " . $date->format("d/m/Y") . PHP_EOL;

?>