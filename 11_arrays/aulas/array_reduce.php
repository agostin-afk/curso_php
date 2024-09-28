<?php

    $array = [1,2,3,4,5,6,7,8,9,10];

    function soma($a, $b): mixed{
        return $a + $b;
    }
    $result = array_reduce(array: $array, callback: "soma"); 
echo "Result: $result";
?>