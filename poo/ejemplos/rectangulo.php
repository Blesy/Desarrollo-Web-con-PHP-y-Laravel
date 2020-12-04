<?php
class Rectangulo {
    public $base;
    public $altura;
    function CalcularArea(){
        return $this->base * $this->altura;
    }
    function CalcularPerimetro(){
        return (2 * $this->base) + (2 * $this->altura );
    }
}
?>