<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <table>

        <?php
        
        $file = 'produtos.txt';

        $handle = fopen($file, 'r');

        if ($handle){
            while(!feof($handle)){
                $linha = fgets($handle);

                $linhaSplit = explode(",", $linha);

                echo"<tr>";
                    foreach($linhaSplit as $coluna){
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