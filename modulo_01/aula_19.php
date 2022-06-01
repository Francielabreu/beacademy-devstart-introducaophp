<?php

$nome ='pedro';
$sobrenome ='silva';

$nome2 = 'maria silva';

echo "Nome: ".ucfirst($nome).PHP_EOL;
echo "Sobrenome: ".ucfirst(strtolower($sobrenome)).PHP_EOL; 
echo "Nome2: ".ucwords($nome2);