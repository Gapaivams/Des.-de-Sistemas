<?php
// Sempre importar arquivos das classes utilizadas
require_once('Cliente.php'); 
$cliente = new Cliente("Maria da Silva", "maria@email.com", "12345678");
//$cliente->nome = "Maria";
//$cliente->email = "maria@email.com";

echo $cliente->nome;

// Testando método da classe Produto
require_once('Produto.php'); // importando a classe
$prod = new Produto();
$prod->nome = "Seda - pacote";
$prod->preco = 3.5;



echo "<p> {$prod->exibirResumo()} </p>";
echo "<p>Desconto: {$prod->calcularDesconto(10)}</p>";

require_once('Usuario.php');

if($cliente->verificarSenha("12345678")){
    echo "<p>Senha correta</p>";
} else{
    echo "<p>Senha incorreta</p>";
}

?>