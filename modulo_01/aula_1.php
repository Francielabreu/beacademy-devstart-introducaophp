<?php
    if ($_POST) {
        echo " Oi ".$_POST['nome'];
    }

?>

<form action="" method="post">

<input type="text" name="nome" placeholder="nome"><br>

<input type="text" name="cidade" placeholder="cidade"><br>

<button type="submit">enviar</button>
</form>