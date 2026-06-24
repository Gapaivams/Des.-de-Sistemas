<?php

require_once __DIR__ . "/../config/Database.php";

class Cliente{
    private $pdo;

    public function __construct(){
        $database = new Database();
        $this->pdo = $database->conectar();
    }

    public function listar(){
        $sql = "SELECT * FROM clientes ORDER BY id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id){
        $sql = "SELECT * FROM clientes WHERE id = ?";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $email, $telefone, $cidade){
        $sql = "INSERT INTO clientes
                (nome,email,telefone,cidade)
                VALUES (?,?,?,?)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            $nome,
            $email,
            $telefone,
            $cidade
        ]);
    }

    public function atualizar($id, $nome, $email, $telefone, $cidade){
        $sql = "UPDATE clientes
                SET
                    nome=?,
                    email=?,
                    telefone=?,
                    cidade=?
                WHERE id=?";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            $nome,
            $email,
            $telefone,
            $cidade,
            $id
        ]);
    }

    public function excluir($id){
        $sql = "DELETE FROM clientes WHERE id=?";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([$id]);
    }
}

?>