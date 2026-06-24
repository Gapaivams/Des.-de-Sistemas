<?php

require_once "controller/ClienteController.php";

$controller = new ClienteController();

$acao = isset($_GET["acao"]) ? $_GET["acao"] : "listar";

switch ($acao) {

    case "listar":

        $clientes = $controller->listar();
        include "view/listar.php";
        break;

    case "novo":

        include "view/cadastrar.php";
        break;

    case "salvar":

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if ($controller->cadastrar($_POST)) {
                $mensagem = "Cliente cadastrado com sucesso!";
            } else {
                $mensagem = "Erro ao cadastrar cliente.";
            }

            include "view/mensagem.php";
        }

        break;

    case "editar":

        $cliente = $controller->buscar($_GET["id"]);
        include "view/editar.php";
        break;

    case "atualizar":

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if ($controller->atualizar($_POST)) {
                $mensagem = "Cliente atualizado com sucesso!";
            } else {
                $mensagem = "Erro ao atualizar.";
            }

            include "view/mensagem.php";
        }

        break;

    case "excluir":

        if ($controller->excluir($_GET["id"])) {
            $mensagem = "Cliente excluído com sucesso!";
        } else {
            $mensagem = "Erro ao excluir.";
        }

        include "view/mensagem.php";

        break;
}