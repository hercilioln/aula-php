<?php

$x = 4;
$limite = 30;

while ($x < $limite) {
    echo "Executando o loop $x <br>";
    if ($x === 24) {
        echo "parando o loop";
        break;
    }
    $x += 2;

}


echo "<br>"; echo "<br>"; echo "<br>";


$i = 0;

while ($i <= 10) {
    echo "loop externo $i <br>";
    $i++;


}


echo "<br>"; echo "<br>"; echo "<br>";

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];


$i = 0;



while ($i < count($arr)) {

    $numAtual = $arr[$i];

    if ($numAtual == 30 || $numAtual == 40) {
        $i++;
        continue;
    }

    echo "Elemento: $numAtual" . "<br>";

    $i++;
}
 


echo "<br>"; echo "<br>"; echo "<br>";



echo "1 elefante incomada muita gente";
for ($i=0; $i < 10; $i++) { 
    echo "$i incomodam muito mais<br>";
}



$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i] % 2 == 1) {
        echo "imprimindo numeros pares $arr[$i] <br>";
    }
}



$arr = [];

for ($i=10; $i <= 20; $i++) { 
    array_push($arr, $i);
}

print_r($arr) . "<br>";

for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i] %2 == 1) {
        echo "Numero: $arr[$i] <br>";
    }
}

























