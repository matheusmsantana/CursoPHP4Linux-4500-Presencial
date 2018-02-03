<?php

//tipagem de variaveis: bool, int, float, double, string, array, resource, objeto, null

/*echo '<pre>';
//boleano
var_dump(true);
var_dump(false);

//inteiro
var_dump(1);

//float
var_dump(1.5);

//string
var_dump('string');

//array
var_dump();*/

class objeto{};

//tipos de variaveis
$bool = true;

$int = 10;

$float = 2.5;

$string = 'matheus';

$array = ['a','b','c'];

$objeto = new objeto;

$recurso = fopen('ola-mundo.php', 'r');

$null = nulĺ;


echo '<pre>';
var_dump($bool);
echo '<hr>';

var_dump($int);
echo '<hr>';

var_dump($float);
echo '<hr>';

var_dump($string);
echo '<hr>';

var_dump($array);
echo '<hr>';

var_dump($objeto);
echo '<hr>';

var_dump($recurso);
echo '<hr>';

var_dump($null);
echo '<hr>';