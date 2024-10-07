<?php

    class Pessoa{
        public $humana;
        function apresentar(){
            echo "Olá, sou uma pessoa, tudo bem com você ?<br>";
        }
    }
    $Agosto = new Pessoa;
    $Agosto -> apresentar();
    $Agosto -> humana = "Sim";
    echo $Agosto -> humana;
    ?>