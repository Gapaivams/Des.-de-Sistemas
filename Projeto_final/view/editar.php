<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Editar Cliente</title>
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

            <h2>Editar Cliente</h2>
            <form action="index.php?acao=atualizar" method="POST">

                <input type="hidden" name="id" value="<?= $cliente["id"] ?>">

                <div class="mb-3">
                    <label class="form-label fw-bold">Nome</label>
                    <input type="text" name="nome" class="form-control" value="<?= $cliente["nome"] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $cliente["email"] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" maxlength="14" value="<?= $cliente["telefone"] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Cidade</label>
                    <input type="text" name="cidade" class="form-control" value="<?= $cliente["cidade"] ?>" required>
                </div>

                <button class="btn btn-primary">Atualizar</button>

                <a href="index.php" class="btn btn-secondary">Cancelar</a>

            </form>
        </div>

        <script>

            const telefone = document.getElementById("telefone");

            telefone.addEventListener("input", function () {

                let valor = this.value.replace(/\D/g, "");

                if(valor.length > 11)
                    valor = valor.substring(0,11);

                let resultado = "";

                if(valor.length > 0)
                    resultado += "(" + valor.substring(0,2);

                if(valor.length >= 2)
                    resultado += ")";

                if(valor.length > 2)
                    resultado += valor.substring(2,7);

                if(valor.length > 7)
                    resultado += "-" + valor.substring(7);

                this.value = resultado;

            });

        </script>
    </body>
</html>