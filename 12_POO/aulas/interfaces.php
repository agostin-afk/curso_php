<?php

interface Caracteristicas{
    
    public function falar(); 

}
Class Humano implements Caracteristicas{

    public function falar(){
        echo 'Olá mundo!';
    }

}
$agosto = new Humano;
$agosto->falar();
