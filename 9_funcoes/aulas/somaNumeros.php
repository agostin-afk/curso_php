<?php
    function sumEvenNumbers($num){
        $soma = 0;
        for($i=1; $i <= $num; $i++){
            $soma += $i;
        }
        return $soma;
    }

   echo sumEvenNumbers(100);