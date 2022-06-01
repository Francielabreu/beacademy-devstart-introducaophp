<?php


$a1 = [
    'nome' => 'maria',
    'sobrenome' => 'abreu',
    'cidade' => 'penedo',
    'telefone' => '333434564',
    'idade' => 30,
    'ano_formacao' => 2019,
    'cor_preferida' => 'azul',
];

$a2 = [
    'nome' => 'pedro',
    'sobrenome' => 'silva',
    'cidade' => 'itatiaia',
    'telefone' => '44543234',
    'idade' => 37,
    'ano_formacao' => 2019,
    'cor_preferida' => 'azul',
];
$todosDados = [
    $a1,
    $a2
   
];




//echo "Nome: " . $dados['nome'] . '<br>';
//echo "Nome: " . $dados['cidade'] . '<br>';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
<table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Cidade</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($todosDados as $info) {
            echo '<tr>';
            echo '<td>' . $info['nome'] . '</td>';
            echo '<td>' . $info['sobrenome'] . '</td>';
            echo '<td>' . $info['cidade'] . '</td>';
            echo '<td>' . $info['telefone'] . '</td>';
            
        }
        ?>
    </tbody>
</table>
</div>