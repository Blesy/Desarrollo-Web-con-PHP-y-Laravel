<?php
    class Rectangulo{
    // propiedades    
    public $base;
    public $altura;
    
    //metodos
    function CalcularArea(){
        return $this->base * $this->altura;
    }

    function CalcularPerimetro(){
        return (2 * $this->base) + (2 * $this->altura );
    }
}
?>