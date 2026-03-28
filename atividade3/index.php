

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">

    
        <form method="POST">
            <div class="form-group row align-items-center mt-3">
            <label for="nome" class="col-1">Nome do Cliente:</label>
            <div class="col-7">
                <input type="text" name="nome" class="form-control"/>
            </div>
            </div>
            
            <div class="form-group row align-items-center mt-3"> 
            <label for="produtoP" class="col-1">Produto Principal:</label>
            <div class="col-7">
                <select name="produtoP" id="Produtop">
                    <option value="none">--Nenhum--</option>
                    <option value="X-Burger">X-Burger</option>
                    <option value="X-Salada">X-Salada</option>
                    <option value="X-tudo">X-tudo</option>
                    <option value="X-Ratão">X-Ratão</option>    
                </select>
            </div>
            </div>
            
            <div class="form-group row align-items-center mt-3"> 
            <label for="tamanho" class="col-1">Tamanho do produto:</label>
            <div class="col-7">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tamanho" id="radio1" value="Pequeno">
                    <label class="form-check-label" for="radio1">
                    Pequeno
                    </label>
                </div>
        
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tamanho" id="radio2" value="Medio">
                    <label class="form-check-label" for="radio2">
                    Medio
                    </label>
                </div>
        
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tamanho" id="radio3" value="Grande">
                    <label class="form-check-label" for="radio3">
                    Grande
                    </label>
                </div>
            </div>
            </div>
            
            <div class="form-group row align-items-center mt-3"> 
            <label for="adicional" class="col-1">Adicionais:</label>
            <div class="col-7">
                <div class="form-check">
                    <input class="form-check-input" name="adicional[]" type="checkbox" value="batata" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Batata Frita
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="adicional[]" type="checkbox" value="katchup" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                    Katchup Adiconal
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="adicional[]" type="checkbox" value="maionese" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                    Maionese Adiconal
                    </label>
                </div>
            </div>
            </div>
            
            <div class="form-group row align-items-center mt-3"> 
                <label for="qunatidade" class="col-1">Quantidade:</label>
                <div class="col-7">
                    <input type="number" name="quantidade" class="form-control" min="0"/>
                </div>
            </div>
            
            
            <button type="submit" class="btn btn-outline-success mt-4">Enviar</button>
        </form>

        <?php
        
        if(isset($_POST['nome'], $_POST['produtoP'], $_POST['tamanho'], $_POST['adicional'], $_POST['quantidade'])){
            
            $nome = $_POST['nome'];
            $produto = $_POST['produtoP'];
            $tamanho = $_POST['tamanho'];
            $adicional = implode(", ", $_POST['adicional']);
            $quantidade = $_POST['quantidade'];


            echo("
                <div class='bg-secondary mt-5 rounded text-center'>
                    <h2>Registro do Pedido:</h2>
                    <p>Nome do Cliente: {$nome}</p>
                    <p>Produto Pedido: {$produto}</p>
                    <p>Tamanho do Produto: {$tamanho}</p>
                    <p>Adicionais: {$adicional}</p>
                    <p>Quantidade Pedida: {$quantidade}</p>
                </div>
            ");
        }

        ?>
    </div>

</body>

</html>