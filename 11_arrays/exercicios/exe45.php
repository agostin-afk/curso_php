<?php
    $array = range(10, 45);

    for($i = 0; $i< count($array); $i++){
        $soma = $array[$i] + 6;
        
        if($soma > 30){
            echo "$soma, Esse numero é grande! <br><br>";
        }else{
            echo "$soma <br><br>";
        }
        
    }
