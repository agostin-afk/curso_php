<?php

    $x = 45;
    function test(){
        global $x; 
        $x = 0;
        echo $x;
        echo "<br>";
    }
    test();
    echo $x;
?>