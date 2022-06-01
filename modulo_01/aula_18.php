<?php

$notasCursoA = [
    10,
    9,
    9.5,
    7,
];

$notasCursoB = [
    10,
    9,
    9.5,
    7,
];

function mediaDeNotas(array $notas): float
{
    $total = 0;
    $quantidade = 0;

    foreach($notas as $cadaNota){
        $total += $cadaNota;
        $quantidade++;
    }


    return $total / $quantidade;
}
    echo mediaDeNotas($notasCursoA).PHP_EOL;
    echo mediaDeNotas($notasCursoB).PHP_EOL;
