<?php

// String numerica aceita espaço antes ou depois. Porem se tiver alguma letra
// Antes vai dar erro. Se tiver letra depois, vai ter um aviso, mas o php
// vai tentar realizar a operação.
$anoNascimento = ' 1998';

$idade = 2023 - $anoNascimento;

echo $idade . PHP_EOL;

?>