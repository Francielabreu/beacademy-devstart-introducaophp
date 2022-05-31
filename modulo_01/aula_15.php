<?php

$frutas =[
    'banana',
    'laranja',
    'limao'
];

$frutas [] = 'maça';
$frutas[10] = 'melancia';

?>

<ul>
    <li><?php echo $frutas[0];?></li>
    <li><?php echo $frutas[1];?></li>
    <li><?php echo $frutas[2];?></li>
    <li><?php echo $frutas[3];?></li>

   
</ul>

<?php
 foreach($frutas as $fruta): ?>
    <li><?php echo $fruta;?></li>

    <?php endforeach; ?>


<!-- OU-->

