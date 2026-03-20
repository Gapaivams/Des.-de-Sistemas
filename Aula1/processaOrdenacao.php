<?php
    // echo $_POST['nome'].' '.$_POST['idade'];

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $nums = [$num1, $num2, $num3];


    for($i = 0; $i < count($nums) ;$i++){
        for($j = 0; $j < count($nums) ;$j++){

            $cur = $nums[$j];
            if($j > 0){
                
                $prev = $nums[$j-1];
                if($cur > $prev){
                    $temp = $prev;
                    $nums[$j-1] = $cur; 
                    $nums[$j] = $prev; 
                    }
            }
        }
    }


    for($i = 0; $i < count($nums) ;$i++){

        echo "
            <p>" . ($i + 1) . ": $nums[$i]</p>
        ";
    }


?>