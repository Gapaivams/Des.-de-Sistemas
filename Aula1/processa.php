<?php
    // echo $_POST['nome'].' '.$_POST['idade'];

    $idade = $_POST['idade'];
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];


    if ($idade < 18 && $idade > 0){
        echo("
            <div>
                <h2>Nome:</h2>
                <p>$nome</p>
            </div>
            <div>
                <h2>Genero:</h2>
                <p>$genero</p>
            </div>
            <div>
                <p>Você não pode se cadastrar</p>
            </div>
            "
        );
    } else if($idade >= 18) {
        echo("
            <div>
                <h2>Nome:</h2>
                <p>$nome</p>
            </div>
            <div>
                <h2>Genero:</h2>
                <p>$genero</p>
            </div>
            <div>
                <p>Você pode se cadastrar</p>
            </div>
            "
        );
    } else{
        echo("
            <div>
                <h2>Idade invalida</h2>
            </div>
            "
        );
    }


?>