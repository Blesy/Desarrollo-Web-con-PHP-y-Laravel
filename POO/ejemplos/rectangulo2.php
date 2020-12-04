<?php
class Rectangulo {
    private $base;
    private $altura;

    function __construct($b, $a){
        $this->CambiarAltura($a);
        $this->CambiarBase($b);
        }

    function CambiarAltura($a){
        if ($a<0){
            echo "Error en el valor de altura<br/>";
            $this->altura=0;
        }
        else    
            $this->altura=$a;
    }
    function CambiarBase($b){
        if ($b<0){
            $this->base=0;
            echo "Error en el valor de base<br/>";
        } 
            else    
            $this->base=$b;
    }

    function CalcularArea(){
        return $this->base * $this->altura;
    }
    function CalcularPerimetro(){
        return (2 * $this->base) + (2 * $this->altura );
    }
}
?>