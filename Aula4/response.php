<?php
function validarDados(){
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $options = ["BES", "ADS", "BCC"];
            // $nome = htmlspecialchars($_POST['nome']);
            // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            // if (empty($nome)) {
            //     echo '<p> Usuario Vazio </p>';
            // } 
            // if (empty($email)) {
            //     echo '<p> Email Vazio </p>';
            // } else {
            //     echo "<p>Nome: " . $nome . "</p>";
            //     echo "<p>Email: " . $email . "</p>";
            // }

            echo "<h2>Valores Recebidos:</h2>";
            foreach ($_POST as $key => $value) {
                $mostrar = true;
                if ($key == "nome") {

                    $nome = htmlspecialchars($value);
                    if (empty($nome)) {
                        $mostrar = false;
                        echo '<p> Nome Vazio </p>';
                    }
                }
                if ($key == "email") {
                    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                    $email = htmlspecialchars($email);
                    if (empty($email)) {
                        $mostrar = false;
                        echo '<p> Email Vazio </p>';
                    }
                }
                if ($key == "idade") {
                    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
                    $idade = htmlspecialchars($idade);
                    if (empty($idade) || ($idade < 0 || $idade >= 110)) {
                        $mostrar = false;
                        echo '<p> Idade Deve ser Preenchido, com um valor entre 1 e 110 </p>';
                    }
                }
                if ($key == "curso") {

                    if (empty(htmlspecialchars($value)) || !in_array($value, $options)) {
                        $mostrar = false;
                        echo '<p> Curso Invalido </p>';
                    }
                }

                if ($mostrar == true) {
                    echo "<p> $key : $value </p>";
                }
            }
        };
}

ob_start();
validarDados();
$page_name = "Dados Cadastrados";
$body = ob_get_clean();
include ('component.php');

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $options = ["BES", "ADS", "BCC"];
//     // $nome = htmlspecialchars($_POST['nome']);
//     // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//     // if (empty($nome)) {
//     //     echo '<p> Usuario Vazio </p>';
//     // } 
//     // if (empty($email)) {
//     //     echo '<p> Email Vazio </p>';
//     // } else {
//     //     echo "<p>Nome: " . $nome . "</p>";
//     //     echo "<p>Email: " . $email . "</p>";
//     // }

//     echo "<h2>Valores Recebidos:</h2>";
//     foreach ($_POST as $key => $value) {
//         $mostrar = true;
//         if ($key == "nome") {
            
//             $nome = htmlspecialchars($value);
//             if (empty($nome)) {
//                 $mostrar = false;
//                 echo '<p> Nome Vazio </p>';
//             }
//         }
//         if ($key == "email") {
//             $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//             $email = htmlspecialchars($email);
//             if (empty($email)) {
//                 $mostrar = false;
//                 echo '<p> Email Vazio </p>';
                
//             }
//         }
//         if ($key == "idade") {
//             $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
//             $idade = htmlspecialchars($idade);
//             if (empty($idade) || ($idade < 0 || $idade >= 110)) {
//                 $mostrar = false;
//                 echo '<p> Idade Deve ser Preenchido, com um valor entre 1 e 110 </p>';
                
//             }
//         }
//         if ($key == "curso") {
            
//             if (empty(htmlspecialchars($value)) || !in_array($value, $options)) {
//                 $mostrar = false;
//                 echo '<p> Curso Invalido </p>';
                
//             }
//         }

//         if($mostrar == true){
//             echo "<p> $key : $value </p>";
//         }
//     }
// }
?>



