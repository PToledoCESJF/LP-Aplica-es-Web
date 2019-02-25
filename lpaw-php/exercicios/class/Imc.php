<?php

class Imc {
    private $peso;
    private $altura;
    
    public function __construct($p, $a) {
        $this->peso = $p;
        $this->altura = $a;
    }

    public function calcularImc(){
        $msg ='';
        $imc = number_format($this->getPeso() / (pow($this->getAltura(), 2)), 2);
        if($imc <= 18.50){
            $msg = 'Você está abaixo do peso';
        }elseif ($imc <= 24.90) {
            $msg = 'Você está no peso ideal (Parabéns)';
        }elseif ($imc <= 29.90) {
            $msg = 'Você está levemente acima do peso';            
        }elseif ($imc <= 34.90) {
            $msg = 'Você está na Obesidade grau I';            
        }elseif ($imc <= 39.90) {
            $msg = 'Você está na Obesidade grau II (severa)';            
        }else{
            $msg = 'Você está na Obesidade grau III (morbida)';            
        }
        echo 'Seu imc é: ' . $imc . '<br>' . $msg;
    }
    
            
    function getPeso() {
        return $this->peso;
    }

    function getAltura() {
        return $this->altura;
    }



}
