<?php

    $filmes1 = [
        'nome' => 'Os vingadores',
        'tipo' => 'Aventura',
        'ano'  => '2022',
        'classificacao' => 'infatil' 
    ];
    $filmes2 = [
        'nome' => 'Pantera Negra',
        'tipo' => 'ação',
        'ano'  => '2020',
        'classificacao' => 'livre' 
    ];
    $filmes3 = [
        'nome' => 'Velozes e Furiosos 9',
        'tipo' => 'ação',
        'ano'  => '2021',
        'classificacao' => 'livre' 
    ];

    $todosFilmes = [ $filmes1,$filmes2,$filmes3];

?>

<table border="1">
    <tr>
        <td>NOME DO FILME</td>
        <td>TIPO</td>
        <td>ANO LANÇAMENTO</td>
        <td>CLASSIFICAÇÃO</td>
    </tr>


    <tr>
        <?php  foreach($todosFilmes as $info): ?>
            <td><?php echo $info['nome'];?></td>
            <td><?php echo $info['tipo'];?></td>
            <td><?php echo $info['ano'];?></td>
            <td><?php echo $info['classificacao'];?></td><tr>
       <?php endforeach; ?>
        
    </tr>

</table>