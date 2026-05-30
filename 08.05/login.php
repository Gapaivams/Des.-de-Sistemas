<?php

$pagename = "login";

$body = '<form action="result.php" method="POST">

    <div class="row-cols-6">

      <div class="col-6">

        <label for="nome" class="form-label">Nome:</label>

        <input type="text" name="nome" placeholder="Digite o seu nome de usuario:" class="form-control">

      </div>

      <div class="col-6">

        <label for="senha" class="form-label">Senha:</label>

        <input type="password" name="senha" placeholder="Digite a sua senha:" class="form-control">

      </div>

      <div class="col-6">

        <button class="btn btn-primary mt-3">Logar</button>

      </div>

    </div>

  </form>';





include __DIR__ . "/menu.php";

?>