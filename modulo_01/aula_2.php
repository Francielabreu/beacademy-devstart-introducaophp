<?php
    if ($_POST) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if (isset($_POST['soma'])) {
            echo " O resultado da soma e : ".($numero1+$numero2);
        }

        if (isset($_POST['subtracao'])) {
            echo " O resultado da subtracao e : ".($numero1-$numero2);
        }

        if (isset($_POST['multiplicacao'])) {
            echo " O resultado da multiplicacao e : ".($numero1*$numero2);
        }

        if (isset($_POST['divisao'])) {
            echo " O resultado da divisao e : ".($numero1/$numero2);
        }
        
    }

?>

<form action="" method="post">

<input type="text" name="numero1" placeholder="Insira o primeiro numero :"><br>

<input type="text" name="numero2" placeholder="Insira o segundo numero :"><br>

<button name="soma">Somar</button>
<button name="subtracao">Subtrair</button>
<button name="multiplicacao">multiplicar</button>
<button name="divisao">Dividir</button>


</form>