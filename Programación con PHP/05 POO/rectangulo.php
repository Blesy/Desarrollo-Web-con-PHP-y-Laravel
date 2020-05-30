<?php
    class Rectangulo{
    // propiedades    
    private $base, $altura;
    
    //metodos

    function __construct($b, $a){
        $this->base = $b;
        $this->altura = $a;
        }

    function __destruct(){
        echo "Bye...";
    }   

    function CambiarAltura($a){
        if ($a>=0)
            $this->altura=$a;
        else{
            $this->altura=0;
            echo "No se permiten alturas negativos<br/>";
        }    
        }
    function CambiarBase($b){
        if ($b>=0){
            $this->base=$b;
        }
        else{
            $this->base =0;
            echo "No se permiten base negativa<br/>";
        }

    }
    function CalcularArea(){
        return $this->base * $this->altura;
    }

    function CalcularPerimetro(){
        return (2 * $this->base) + (2 * $this->altura );
    }
}
?>