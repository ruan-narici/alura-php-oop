<?php

$arquivoStringJson = '[
    {
        "pais": "Brasil",
        "medalhas": {
            "ouro": 3,
            "prata": 5,
            "bronze": 3
        }
    },
    {
        "pais": "Costa rica",
        "medalhas": {
            "ouro": 5,
            "prata": 4,
            "bronze": 4
        }
    },
    {
        "pais": "Estados unidos",
        "medalhas": {
            "ouro": 4,
            "prata": 3,
            "bronze": 5
        }
    },
    {
        "pais": "Trindade e tobago",
        "medalhas": {
            "ouro": 4,
            "prata": 3,
            "bronze": 4
        }
    }
]';

// $arquivoJson = json_decode($arquivoStringJson);
//Aqui definimos que o Json vai se transformar em um Array associativo
$arquivoJson = json_decode($arquivoStringJson, true);

//var_dump($arquivoJson);

/*
-Listar o número de países participantes;
-Fazer com que seus nomes fiquem em letras maiúsculas;
-Ordenar:
--Pelo país que tiver mais medalhas de ouro
--Em caso de empate, pelo país que tiver mais medalhas de prata
--Em caso de empate, pelo país que tiver mais medalhas de bronze
--Listar o número de medalhas distribuídas na competição
*/

$qtdPaisParticipante = count($arquivoJson);
echo "$qtdPaisParticipante países participantes" . PHP_EOL;


// Percorrendo o arquivo e buscando pela REFERENCIA "&" pais 
// Depois faço um cast para String e atribuo o strtoupper para o mesmo item.
// foreach($arquivoJson as &$pais) {
//     $nomePais = (string) $pais["pais"];
//     $pais["pais"] = strtoupper($nomePais);
// }

foreach ($arquivoJson as $pais) {
    echo $pais["pais"] . ", ouro: " . $pais["medalhas"]["ouro"] . ", prata: " . 
        $pais["medalhas"]["prata"] . ", bronze: " . $pais["medalhas"]["bronze"] . PHP_EOL;
}

// Ordenando com base nas medalhas
usort($arquivoJson, function($itemA, $itemB) {
    if ($itemA["medalhas"]["ouro"] > $itemB["medalhas"]["ouro"]) {
        return -1;
    } else if ($itemA["medalhas"]["ouro"] < $itemB["medalhas"]["ouro"]) {
        return 1;
    } else {
        if ($itemA["medalhas"]["prata"] > $itemB["medalhas"]["prata"]) {
            return -1;
        } else if ($itemA["medalhas"]["prata"] < $itemB["medalhas"]["prata"]) {
            return 1;
        } else {
            if ($itemA["medalhas"]["bronze"] > $itemB["medalhas"]["bronze"]) {
                return -1;
            } else if ($itemA["medalhas"]["bronze"] < $itemB["medalhas"]["bronze"]) {
                return 1;
            } else {
                return 0;
            }
        }
    }
});

// var_dump($arquivoJson);
echo PHP_EOL . "# RANK POR MEDALHA #". PHP_EOL;
foreach ($arquivoJson as $pais) {
    echo $pais["pais"] . PHP_EOL;
}

$numeroDeMedalhas = array_reduce($arquivoJson, function ($medalhasAcumuladas, $itemAtual) {
    $medalhasDoPais = array_reduce($itemAtual['medalhas'], function ($medalhasAcumuladasDoPaisAtual, $medalhasDoPaisAtual) {
        return $medalhasAcumuladasDoPaisAtual + $medalhasDoPaisAtual;
    }, 0);

    return $medalhasAcumuladas + $medalhasDoPais;
}, 0);

echo "Total de medalhas entregues: $numeroDeMedalhas";

?>