<?php

require_once __DIR__ . "/../model/Cliente.php";

class ClienteController{
    private $cliente;

    public function __construct(){
        $this->cliente = new Cliente();
    }

    public function listar(){
        return $this->cliente->listar();
    }

    public function buscar($id){
        return $this->cliente->buscarPorId($id);
    }

    public function cadastrar($dados){

        if(!preg_match('/^\(\d{2}\)\d{5}-\d{4}$/', $dados["telefone"])){

            return false;

        }
        $telefone = preg_replace('/\D/', '', $dados["telefone"]);
        return $this->cliente->cadastrar(
            $dados["nome"],
            $dados["email"],
            $dados["telefone"],
            $dados["cidade"]
        );
    }

    public function atualizar($dados){

        if(!preg_match('/^\(\d{2}\)\d{5}-\d{4}$/', $dados["telefone"])){

            return false;

        }

        return $this->cliente->cadastrar(
            $dados["nome"],
            $dados["email"],
            $dados["telefone"],
            $dados["cidade"]
        );
    }

    public function excluir($id){
        return $this->cliente->excluir($id);
    }
}

?>