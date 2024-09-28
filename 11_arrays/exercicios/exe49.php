<?php

    $cor = "vermelho";
    $num_rodas = 4;
    $num_bancos = 2;
    $eletrico = "Não";
    $donos = ["Pedro", "Lucas", "Gabriel"];

    $carro = compact("cor", "num_rodas", "num_bancos", "eletrico", "donos");
    print_r($carro);
    echo "<br>";

    foreach($carro as $aux => $value){
        if(is_array($value)){
            echo "$aux: ";
            print_r(($value));
            continue;
        }
        echo "$aux: $value <br>";
    }

?>