<?php

    $array = [
        "nome" => "Agosto",
        "idade" => 45,
        "sexo" => "gosta"
    ];

    extract($array);
    echo "nome: $nome <br>";
    echo "idade: $idade <br>";
    echo "sexo: $sexo<br>";

    $nome = "Pedro";
    $idade = 90;
    $sexo = "Não";
    $array2 = compact("nome", "idade", "sexo");
    print_r($array2);
?>