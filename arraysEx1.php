<?php

$car = [
    'marca' => 'Ford', 
    'modelo' => 'Ranger', 
    'ano' => 2021, 
    'placa' => 'PHM-0025'
];

echo "<br>";
echo "<br>";

print_r($car);

$marca = $car['marca'];
$modelo = $car['modelo'];
$ano = $car['ano'];


echo "<br>";
echo "<br>";
echo "o $modelo é um carro da $marca do ano de $ano";