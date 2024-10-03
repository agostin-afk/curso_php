<?php

    function somaElementos($array){
        $soma = 0;
        for($i = 0; $i<count($array); $i++){
            $soma += $array[$i]; 
        }
        return $soma;
    }

?>