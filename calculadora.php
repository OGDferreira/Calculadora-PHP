<?php 

class calculadora{

    public float $resultado = 0;


    public function somar($x){
        $this->resultado += $x;
    
    }

    public function dividir ($x){
        $this->resultado /= $x;
    
    }

    public function multiplicar ($x){
        $this->resultado *= $x;
        
    }

    public function subtrair($x){
        $this->resultado -= $x;
    
    }
}

?>