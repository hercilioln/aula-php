<?php


$arr = [5, "Hercilio", true, false, "opa", 12.5, "teste", [], 5, 10];

$a = count($arr);
$b = 0;

while ($a > $b) {
   
    if (is_float($arr[$b])) {
        echo $arr[$b] . "<br>";
    }
    $b++;
}