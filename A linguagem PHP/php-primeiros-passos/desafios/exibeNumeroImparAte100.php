<?php

for ($i = 1; $i <= 100; $i++) {
    $divisao = $i % 2;
    if ($divisao != 0) {
        echo "O número $i é ímpar." . PHP_EOL;
    } else {
        continue;
    }
}

?>