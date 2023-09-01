<?php

$contexto = stream_context_create([
    'http' => [
        'method' => "POST",
        'header' => "X-FROM: PHP\r\nContent-type: text/plain",
        'content' => "{pessoa: {nome: ruan}}"
    ]
]);

echo file_get_contents("https://httpbin.org/post", false, $contexto);

?>