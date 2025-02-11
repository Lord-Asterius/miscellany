<?php

return [
    'actions'       => [
        'delete-confirm'    => 'esse clima',
    ],
    'create'        => [
        'success'   => 'Clima adicionado',
        'title'     => 'Novo efeito do clima',
    ],
    'destroy'       => [
        'success'   => 'Clima removido',
    ],
    'edit'          => [
        'success'   => 'Clima atualizado',
        'title'     => 'Atualizar clima',
    ],
    'fields'        => [
        'effect'        => 'Efeito',
        'name'          => 'Nome',
        'precipitation' => 'Precipitação',
        'temperature'   => 'Temperatura',
        'weather'       => 'Clima',
        'wind'          => 'Vento',
    ],
    'options'       => [
        'weather'   => [
            'bolt'                  => 'Trovão',
            'cloud'                 => 'Nublado',
            'cloud-rain'            => 'Chuvoso',
            'cloud-showers-heavy'   => 'Chuva forte',
            'cloud-sun'             => 'Nublado e ensolarado',
            'cloud-sun-rain'        => 'Nuvens, sol e chuva',
            'meteor'                => 'Meteoro',
            'smog'                  => 'Nevoeiro',
            'snowflake'             => 'Neve',
            'sun'                   => 'Ensolarado',
            'wind'                  => 'Ventoso',
        ],
    ],
    'placeholders'  => [
        'effect'        => 'Efeito mágico ou natural',
        'name'          => 'Nome de clima personalizado (opcional)',
        'precipitation' => 'Quantidade de água',
        'temperature'   => 'Máxima e mínima do dia',
        'wind'          => 'Velocidade do vento',
    ],
];
