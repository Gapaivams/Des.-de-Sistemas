<?php
    // echo $_POST['nome'].' '.$_POST['idade'];

    $mes = $_POST['mes'];

    $mesCor = "";
    
    switch($mes){
        case 1:{
            $mesCor = "Janeiro";
            break;
        }
        case 2:{
            $mesCor = "Fevereiro";
            break;
        }
        case 3:{
            $mesCor = "Março";
            break;
        }
        case 4:{
            $mesCor = "Abril";
            break;
        }
        case 5:{
            $mesCor = "Maio";
            break;
        }
        case 6:{
            $mesCor = "Junho";
            break;
        }
        case 7:{
            $mesCor = "Julho";
            break;
        }
        case 8:{
            $mesCor = "Agosto";
            break;
        }
        case 9:{
            $mesCor = "Setembro";
            break;
        }
        case 10:{
            $mesCor = "Outubro";
            break;
        }
        case 11:{
            $mesCor = "Novembro";
            break;
        }
        case 12:{
            $mesCor = "Dezembro";
            break;
        }
        default:{
            echo "<h3>Esse valor nao corresponde a nenhum mes</h3>";
            break;
        }
    }


    if(!$mesCor == ""){
        echo("
            <h2>O valor digitado corresponde ao mes $mesCor</h2>
            "
        );
    }

?>