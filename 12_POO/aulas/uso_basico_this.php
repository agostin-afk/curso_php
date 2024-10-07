<?php

    class Animal{
        public $name;
        function Def_name($name){
            $this->name = $name;
            return $name;
        }

        function Chamar_animal(){
            echo "<br> Vem aqui ", $this->Def_name($this->name);
        }
    }
    $dog = new Animal;
    $dog ->Def_name("Rex");
    echo $dog->name;
    $dog->Chamar_animal();
?>