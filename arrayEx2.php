<?php

$pessoa = [
    'nome' => 'Hercilio',
    'idade' => 29,
    'altura' => 1.75,
    'sobrenome' => 'Lopes'
];

$nome = $pessoa['nome'];
$idade = $pessoa['idade'];
$sobrenome = $pessoa['sobrenome'];
$altura = $pessoa['altura'];


echo '<br>';

echo "O nome dele é $nome $sobrenome, com idade de $idade e com $altura de altura";

echo '<br>';

if ($idade >= 18) {
    echo "$nome é maior de idade";
} else {
    echo "$nome é menor de idade";
}