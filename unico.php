<?php

    $sorteado = array();
    $unicos = array();

    for($i = 0; $i < 20; $i++){
        array_push($sorteado, rand(1, 10));
    }

    echo "O Array sorteado foi: ";

    for($i = 0; $i < 20; $i++){
        if($i == 19){
            echo "{$sorteado[$i]}. \n";
        }
        else{
            echo "{$sorteado[$i]}, ";
        }
    }

    for($i = 0; $i < 20; $i++){
        $repetition = false;
        for($j = 0; $j < 20; $j++){
            if($sorteado[$i] == $sorteado[$j] && $i != $j){
                $repetition = true;
            }
        }

        if(!$repetition){
            array_push($unicos, $sorteado[$i]);
        }
    }

    if(count($unicos) > 0){
        echo "Os seguintes números não se repetem no array sorteado: ";

        for($i = 0; $i < count($unicos); $i++){
            if($i == count($unicos) - 1){
                echo "{$unicos[$i]}.";
            }
            else{
                if($i == count($unicos) - 2){
                    echo "{$unicos[$i]} e ";
                }
                else{
                    echo "{$unicos[$i]}, ";
                }
            }
        }
    }

?>