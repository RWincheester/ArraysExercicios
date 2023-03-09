<?php

$horarios = [
 
    'joao' => [
        'horario-chegada' => [8, 14],
        'horario-saida'   => [12,18],
    ],
    'maria' => [
        'horario-chegada' => [7, 13],
        'horario-saida'   => [11, 17]
    ]

];

// horarios de chegada e saida.

$nome1 = 'joao chega as';
$nome2 = 'maria chega as';
$nome3 = 'joao sai as';
$nome4 = 'maria sai as';


echo'<pre>';

    echo $nome1, ':';

echo'<pre>';

print_r($horarios['joao']['horario-chegada']);

    echo $nome3, ':';

echo'<pre>';

print_r($horarios['joao']['horario-saida']);

    echo $nome2, ':';

echo'<pre>';

print_r($horarios['maria']['horario-chegada']);

    echo $nome4, ':';

echo'<pre>';

print_r($horarios['maria']['horario-saida']);

   
?>