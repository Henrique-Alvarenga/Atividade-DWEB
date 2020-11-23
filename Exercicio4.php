<?php

    $agenda = array ("Henrique" => "1111-1111", "Joao" => "2222-2222", "Lucas" => "3333-3333", "Guilherme" => "4444-4444", "Ana" => "5555-5555", "Isabela" => "6666-6666");
    
    foreach($agenda as $chave => $numero){
        echo "Nome: $chave <br> Numero: $numero <br><br>";
    }
?>