<?php
    // echo $_POST['nome'].' '.$_POST['idade'];

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    $soma = $num1 + $num2;

    if($soma > 10){
        $soma += 8;
        echo("
            <h2>Resultado da soma + 8 = $soma</h2>
            "
        );
    }else{
        $soma -= 5;
        echo("
            <h2>Resultado da soma - 5 = $soma</h2>
            "
        );
    }


?>