<?php

if (5 > 10 && 11 > 8) {
    
    print "entrou no if 1";
}

if (50 > 10 && 11 > 8) {
    
    print "entrou no if 2";
}

if (50 > 10 && 7 > 8) {
    
    print "entrou no if 3";
}

if (5 > 10 && 2 > 8) {
    
    print "entrou no if 1";
}

print "<br>";

print "<br>";
print "<br>";


$a = (string) "testando";
echo $a;
print "<br>";
print "<br>";

$b = (string) 12.9;
echo $b;
print "<br>";
print "<br>";

$c = (string) [1, 2, 3];
print $c;

print "<br>";
print "<br>";
print "<br>";
print "<br>";


$nn = 45;

$nn %= 10;

print $nn;


print "<br>";
print "<br>";
print "<br>";
print "<br>";


print 25 > 12 ? "Deu true <br>" : "Deu false <br>";

print "<br>";
print "<br>";
print "<br>";
print "<br>";



$vel = 60;

if ($vel < 40) {
    echo "Sua velocidade esytá correta";
} else if ($vel == 40) {
    echo "Sua velocidade esta acima do permitido tome cuidado";
} else {
    echo "Multa por excesso de velocidade";
}


print "<br>";
print "<br>";
print "<br>";
print "<br>";



$eu = 42;

switch ($eu) {
    case 45:
        print "Eu é 45";
        break;
    case 42:
        print "Eu é 42";
        break;
    
    default:
        print "Não é 45";
        break;
}