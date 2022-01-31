<?php

print "<h1>Escopo Local</h1>";

$nome = "Hercilio";

print "$nome escopo global <br>";


function teste(){
    $nome = "Paula";
    print "$nome escopo local <br>";
}

teste();


function soma($num1, $num2)
{
    print "$num1 + $num2 = " . $num1 + $num2;
    print "<br>";
}

soma(56, 59);
soma(56, 123);
soma(2, 3);

