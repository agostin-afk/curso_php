<?php

    $array=[];

    print_r($array);
    $array[0] = 45;
    echo "<br>";
    print_r($array);
    $array[1] = 'Hello world';
    echo "<br>";
    print_r($array);
    $array2 = [];
    $array2[0] = 'Hello world2';
    $array2[1] = 90;
    $array[2] = $array2;
    echo "<br>";
    print_r($array);
    echo "<br>";
    print_r($array[2][1]);
    $rangeArray = range(1, 10 );
    echo "<br>";
    print_r($rangeArray);

?>