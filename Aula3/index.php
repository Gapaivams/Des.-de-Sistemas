<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula3 - home</title>
</head>

<body>
    <p>
        <a href="notas.php">Exemplo de formulario com arrays</a>
    </p>

    <?php
        $pessoa = array("nome"=>"Gabriel","idade"=>18, "cidade"=>"Londrina");
        $alunos = array( array("ana", 8.5), array("bruno", 7.6), array("rogerio", 9.1));

        foreach($alunos as $aluno){

            foreach($aluno as $nome => $nota){
                echo("
                <p>{$nome}: {$nota}</p>
                ");
            }
        }
                
        foreach($pessoa as $nome => $valor){
            echo("
                <p>{$nome}: {$valor}</p>
            ");
        }

        $nomes = array("joao", "carlos");
        $nomes2 = array("ana", "fernanda", "roger");
        // ... desestrutura o todos os itens do array como elementos proprios.
        array_push($nomes, ...$nomes2);

        print_r($nomes);

        $numeros = array(10,12,13,15,14);
        $numeros2 = $numeros;
        
        echo '<br>';
        print_r($numeros);
        echo '<br>';
        print_r($numeros2);
        array_push($numeros2, 900);
        echo '<br>';
        print_r($numeros);
        echo '<br>';
        print_r($numeros2);
    ?>
</body>

</html>