<?php

    function encontrarPares($array){
        $array_pares = [];
        for($i = 0; $i < count($array); $i++){
            if($array[$i] % 2 == 0){
                $array_pares = $array[$i];
            }
        }
        return $array_pares;
    }

?>