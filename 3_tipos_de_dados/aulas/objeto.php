<?php

class Pessoa{
    //public $nome;
    function falar(){
        echo "Tô falando";
    }

}
$meu_nome = New Pessoa();

$meu_nome -> nome = "Agosto";
echo $meu_nome-> nome; 
$meu_nome ->falar();
?>