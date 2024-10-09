<?php
trait Objeto{
    public function teste(){
        echo "testando trait de objeto.<br>";
    }
}
class Central{
    use Objeto;
}
$teste = new Central;
$teste->teste();

