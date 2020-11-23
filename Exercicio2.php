<?php
    
    function efetuaSoma($num1, $num2){
        
        $soma = $num1 + $num2;
            
        if($soma > 20){
            $soma = $soma + 8;
            echo "Resultado: $soma";
        }
        else{
            $soma = $soma - 5;
            echo "Resultado: $soma";
        }
    }

    $num1 = 10;
    $num2 = 20;

    efetuaSoma($num1, $num2);

?>