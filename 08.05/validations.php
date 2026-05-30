<?php

function validarNome($nome, $contas){

  $nome = htmlspecialchars($nome);

  if($nome && array_key_exists($nome, $contas)){

    return true;

  }else{

    return false;

  }

}



function validarSenha($senha, $contas, $nome){

  $senha = htmlspecialchars($senha);

  if($senha && array_key_exists($nome, $contas)){

    if($senha == $contas[$nome]){

      return true;

    }else{

      return false;

    }

  }else{

    return false;

  }

}











?>

