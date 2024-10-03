<?php

    function maiorElemento($array){
        $maior = $array[0];
        for ($i = 1; $i< count($array); $i++){
            if($maior< $array[$i]){
                $maior = $array[$i];
            }
        }
        return $maior;
    }

?>