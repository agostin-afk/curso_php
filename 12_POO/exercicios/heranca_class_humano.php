<?php

    class Humano{
        public $nome;
        private $idade;
        public function setNome($string ){
            $this->nome = $string ;
        }
        public function apresentar(){
            echo "Olá eu sou o {$this->nome}! tudo bem com você?<br>";
        }
    }
    class Professor extends Humano{
        public $materia;
        public function setMateria($string){
            $this->materia = $string;
        }
        public function apresentarProfessor(){
            echo "Sou o {$this->nome}, professor de {$this->materia}<br>";
        }
    }
    $pedro = new Professor;
    $pedro->setNome("Pedro");
    $pedro->apresentar();
    $pedro->setMateria("Matemática");
    $pedro->apresentarProfessor();

?>