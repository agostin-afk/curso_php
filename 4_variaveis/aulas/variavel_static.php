<?php
    function test(){
        static $x = 0;
        $x++;
        echo "$x <br>";

    }
    test();
    test();
    test();

?>