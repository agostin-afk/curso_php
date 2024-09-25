<?php

    $array = ["Pedro", 45, "estudante", "solteiro"];
    print_r($array);
    echo "<br>";
    list($nome, $idade, $profissao, $estado_civil) = $array;
    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$estado_civil <br>";
?>