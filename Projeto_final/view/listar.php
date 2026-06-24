<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Clientes</title>

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

            <div class="card shadow-lg border-0">

                <div class="card-body p-4">

                    <h2>Cadastro de Clientes</h2>

                    <a href="index.php?acao=novo" class="btn btn-success mb-3">Novo Cliente</a>

                    <table class="table table-hover align-middle">

                        <thead class="table-primary">

                            <tr>

                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Cidade</th>
                            <th>Ações</th>

                            </tr>

                        </thead>

                        <tbody>

                        <?php foreach($clientes as $cliente){ ?>

                            <tr>

                                <td>
                                    <span class="badge bg-secondary">
                                    <?= $cliente["id"] ?>
                                    </span>
                                </td>

                                <td><?= $cliente["nome"] ?></td>

                                <td><?= $cliente["email"] ?></td>

                                <td><?= preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1)$2-$3', $cliente["telefone"]) ?></td>

                                <td><?= $cliente["cidade"] ?></td>

                                <td>
                                    <a href="index.php?acao=editar&id=<?= $cliente["id"] ?>" class="btn btn-primary btn-sm">Editar</a>

                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir?')" href="index.php?acao=excluir&id=<?= $cliente["id"] ?>">
                                        Excluir
                                    </a>
                                </td>

                            </tr>

                        <?php } ?>

                        </tbody>

                    </table>
                </div>

            </div>

        </div>

    </body>

</html>