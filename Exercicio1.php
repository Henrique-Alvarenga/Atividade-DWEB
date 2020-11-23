<?php
    function maiorMenorNumero($numeros){
        
        $menor = $numeros[0];
        $maior = $numeros[0];
        
        foreach($numeros as $valor){
            if($valor > $maior){
                $maior = $valor;
            }
            
            elseif($valor < $menor){
                $menor = $valor;
            }
        }
        
        echo "Maior numero: $maior <br> Menor numero: $menor";
        
    }

    $numeros = array (1,2,3,4,5);

    maiorMenorNumero($numeros);
?>