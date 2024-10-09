<?php
class Car{
    public $cor;
    public $porta;
    public $marca;
    function __construct($cor, $porta, $marca){
        $this->cor = $cor;
        $this->porta = $porta;
        $this->marca = $marca;
    }
}
$ferrari = new Car("vermelho", 4, "Ferrari");
echo "O carro é $ferrari->cor\nPossui $ferrari->porta portas\nE é da marca $ferrari->marca";
