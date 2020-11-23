<?php

    function verificaTriangulo($a, $b, $c){
        
        if(abs($b-$c) < $a && $a < $b+$c){
            if(abs($a-$c) < $b && $b < $a+$c){
                if(abs($a-$b) < $c && $c < $a+$b){
                    echo "Eh um triangulo";
                }
            }
        }
        else{
            echo "Nao eh um triangulo";
        }
    }

    echo "Teste com valores 5, 9, 10: ";
    echo verificaTriangulo(5, 9, 10);
    echo "<br>";
    echo "Teste com valores 1, 9, 17: ";
    echo verificaTriangulo(1, 9, 17);
     
?>