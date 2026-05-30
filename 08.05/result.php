<?php

include __DIR__ . "/validations.php";



$pagename = "Resultado";



$contas = ["jose" => "teste123", "roberto" => "senha789"];





$error = ["nome" => "Nome inserido está incorreto", "senha" => "Senha inserida está incorreta"];

$is_success = true;



if($_SERVER['REQUEST_METHOD'] == "POST"){

  $nome = $_POST['nome'];

  $senha = $_POST['senha'];



  if(validarNome($nome, $contas) && validarSenha($senha, $contas, $nome)){

    $body = "

  <div>

      <h2 class='text-success'>Login Realizado com sucesso</h2>

    </div>

  ";

  } else{

    $body = "

  <div>

      <h2 class='text-danger mb-4'>Usuario ou senha invalidos, Tente novamente!</h2>

    </div>

  ";

  }



  if (!validarNome($nome, $contas)){

    $is_success = false;

    $body = $body . '<div><p class="text-danger">Usuario Invalido</p></div>';

  }



  if (!validarSenha($senha, $contas, $nome)){

    $is_success = false;

    $body = $body . '<div><p class="text-danger">Senha Invalida</p></div>';

  }

  

}else{

$body = "

<div>

    <h2 class=''>Voce deve tentar logar primeiro</h2>

  </div>

";

}













include __DIR__ . "/menu.php";



?>

