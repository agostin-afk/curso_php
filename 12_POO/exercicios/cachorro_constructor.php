<?php

    class Cachorro{
        public $cor;
        public $nome;
        public $raca;
        function __construct($nome, $cor, $raca){
            $this->nome = $nome;
            $this->cor = $cor;
            $this->raca = $raca;

        }
        public function apresentarAnimal(){
            echo "O nome: $this->nome \n A raça: $this->raca \n A cor: $this->cor";
        }
    }
    $rex = new Cachorro("rex", "marrom", "vira-lata");
    $rex ->apresentarAnimal();

?>