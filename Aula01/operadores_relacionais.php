<?php


$var1 = 10;
$var2 = '8';
$var3 = '6';
$var4 = '10';
//Operadores de comparacao

//operadores de igualdade
var_dump($var1 == $var2);
echo '<hr><br/>';

var_dump($var1 == $var4);
echo '<hr><br/>';

//operadores de igualdade e mesmo tipo
var_dump($var1 === $var4);
echo '<hr><br/>';

//operador de diferente e do mesmo tipo
var_dump($var1 == $var4);
echo '<hr><br/>';

//operador maior que
var_dump($var1 > $var);
echo '<hr><br/>';

//operador menor que
var_dump($var1 < $var);
echo '<hr><br/>';

//verificando se um num e par
var_dump(($var1 % 2 == 0));

