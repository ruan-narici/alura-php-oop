<?php

$diretorioAtual = dir(".");

echo $diretorioAtual->path . PHP_EOL;

while ($pasta = $diretorioAtual->read()) {
    echo $pasta . PHP_EOL;
}

?>