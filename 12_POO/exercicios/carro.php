<?php

    class Carro{
        public $velMax;
        public $rodasNum = 4;
        function setVelocity($vel){
            $this->velMax = $vel;
        }
        function getVelocity(){
            return $this->velMax;
        }
    }
    $car = new Carro;
    $car->setVelocity(45);
    echo "Velocidade maxima: ", $car->getVelocity();

?>