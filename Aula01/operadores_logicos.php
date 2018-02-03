<?php

echo '<pre>';

$var1 = true;
$var2 = false;
$var3 = true;
$var4 = false;

//operador logico and: compara dois valores se forem iguais retorna true se nao false
var_dump($var1 and $var2);
echo '<hr><br/>';

var_dump($var1 and $var3);
echo '<hr><br/>';

var_dump($var2 && $var4);
echo '<hr><br/>';


//operador logico or: compara dois valores se um for verdadeiro retorna true se os dois forem false retorna false
var_dump($var1 or $var2);
echo '<hr><br/>';

var_dump($var1 or $var3);
echo '<hr><br/>';

var_dump($var2 || $var4);
echo '<hr><br/>';


//operador logico xor: compara dois valores caso um seja true retorna true se os dois forem true retorna false tb
var_dump($var1 xor $var2);
echo '<hr><br/>';

var_dump($var1 xor $var3);
echo '<hr><br/>';

var_dump($var2 xor $var4);
echo '<hr><br/>';

//operador de negacao
var_dump(!$var1 == true);
echo '<hr><br/>';

