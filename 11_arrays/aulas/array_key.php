<?php

    $array = [
        "nome" => "lucas",
        "idade" => 45
    ];
    if(array_key_exists("nome", $array)){
        echo "Chave 'nome' existe <br>";
    }else{
        echo "Chave não esiste <br>";
    }
    if(isset($array["nome"])){
        echo "Chave 'nome' existe <br>";
    }else{
        echo "Chave não esiste <br>";
    }

?>