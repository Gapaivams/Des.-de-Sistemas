<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Mensagem</title>

    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">

            <div class="container">

                <a class="navbar-brand fw-bold" href="index.php">

                    📋 Sistema de Clientes

                </a>

            </div>

        </nav>
        
        <div class="container mt-5">

            <div class="alert alert-info">
                <?= $mensagem ?>
            </div>

            <a href="index.php" class="btn btn-primary">Voltar para Listagem</a>

        </div>

    </body>

</html>