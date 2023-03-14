<?php

$horarios= [
    "Maria" =>  ["chegada" => "07:00", "saida" => "17:00"],
    "João"  =>  ["chegada" => "08:00", "saida" => "18:00"]
];

$maria_chega = $horarios["Maria"]["chegada"];
$maria_sai = $horarios["Maria"]["saida"];
$joao_chega = $horarios["João"]["chegada"];
$joao_sai = $horarios["João"]["saida"];

$var1 = 'João chega ás';
$var2 = 'Maria chega ás';
$var3 = 'e sai ás';


echo '<pre>';

echo "$var1 $joao_chega $var3 $joao_sai", '.';

echo '<pre>';

echo "$var2 $maria_chega $var3 $maria_sai", '.';
 
?>