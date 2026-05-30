<?php
require_once('Usuario.php');
class Cliente extends Usuario{
    public string $nome;
    public string $email;
    public string $telefone;
    
    // Construtor da classe
    public function __construct(string $nome, string $email, string $senha){
        parent::__construct($senha);
        $this->nome = $nome;
        $this->email = $email;
    }

    public function __destruct(){
        echo "<p>Destruindo o cliente {$this->nome}</p>";
    }
}

?>