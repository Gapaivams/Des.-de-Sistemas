<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    

    <table>

        <?php
        
        $file = 'produtos.txt';

        $handle = fopen($file, 'r');

        if ($handle){
            while(!feof($handle)){
                $linha = fgetcsv($handle);

                echo $linha[0];

                // $linhaSplit = explode(",", $linha);

                echo"<tr>";
                    foreach($linha as $coluna){
                        echo "<td>".$coluna."</td>";
                    }
                echo"</tr>";
                    
            }

            fclose($handle);
        } else{
            echo "Erro ao abrir o arquivo";
        }

        
        ?>
    </table>    


</body>
</html>