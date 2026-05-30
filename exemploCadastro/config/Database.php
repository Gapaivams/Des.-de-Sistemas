<?php

class Database{
    private string $host = "localhost";
    private string $banco = "sistema_clientes";
    private string $usuario = "root";
    private string $senha = "";
    private string $port = "3307";
    private ?PDO $conexao = null;
    
    public function conectar(): PDO{
        if($this->conexao === null){
            try{
                $this->conexao = new PDO(
                    "mysql:host={$this->host};port={$this->port};dbname={$this->banco};charset=utf8mb4",
                    $this->usuario,
                    $this->senha
                );

                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                echo "Conexão realizada com sucesso";
            } catch(PDOException $erro){
                echo "Erro na conexão: ". $erro->getMessage();
            }

        }

        return $this->conexao;
    }


}



?>