<?php

class Pessoa{

    function falar(){
        echo "Olá pessoal";
    }

}

$pessoa = new Pessoa();

$pessoa->nome = "Hercilio";

echo $pessoa->nome;

echo "<br>";

$pessoa->falar();

