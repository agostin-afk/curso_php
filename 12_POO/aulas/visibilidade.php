<?php

    class Carro{
        public $rodas = 4;
        function getRodas(){
            echo "numero de rodas: ", $this->rodas, "<br>";
        }
    }
    class Mecanico{
        function AlterarNumRodas($obj){
            $obj -> rodas = 5;
        }
    }
    $car = new Carro;
    $car->getRodas();
    $mecanico = new Mecanico;
    $mecanico->AlterarNumRodas($car);
    $car->getRodas();

?>