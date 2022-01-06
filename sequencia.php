<?php

    $randomArray = array(1, 2, 5, 3, 5);

    sequenciaCrescente($randomArray);

    function sequenciaCrescente($array){
        $crescente = true;
        $toFix = 0;
        $indicesVerificados = array();

        for($i = 0; $i < count($array); $i++){
            for($j = 0; $j < count($array); $j++){
                if($array[$i] > $array[$j] && $j > $i && !in_array($i, $indicesVerificados)){
                    $crescente = false;
                    $toFix++;
                    array_push($indicesVerificados, $i);
                }
            }
        }

        for($i = 0; $i < count($array); $i++){
            if($i == 0){
                echo "[{$array[$i]}, ";
            }
            else{
                if($i == count($array) - 1){
                    echo "{$array[$i]}]";
                }
                else{
                    echo "{$array[$i]}, ";
                }
            }
        }

        if(!$crescente && $toFix == 1){
            echo "\ntrue";
        }
        else if($crescente){
            echo "\ntrue";
        }
        else{
            echo "\nfalse";
        }
    }
?>