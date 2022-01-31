<?php

if(is_int(10)){
    echo 'É um numero inteiro1 <br>';
} 


if(is_int('Texto')){
    echo 'É um numero inteiro2 <br>';
} 

$a = 10;

if(is_int($a)){
    echo 'É um numero inteirddo3 <br>';
} 


$b = 2.5;

if(is_float($b)){
    echo "É um numero float <br>";
}else {
    echo "Não é um float <br>";
}


$nome = 'Hercilio';

echo "o nome dele é $nome <br>";

echo "$nome fez muitos amigos em $a cidades para $b pessoas";




