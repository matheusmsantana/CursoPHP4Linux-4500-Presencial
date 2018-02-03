<?php

$idade = 18;
$temHabilitacao = false;

if($idade >= 18 and $temHabilitacao == true){
	echo 'pode dirigir';
}elseif($idade >= 18 and !$temHabilitacao == true){
	echo 'nao pode dirigir mais pode se habilitar';
}else{
	echo 'nao pode dirigir nem se habilitar';
}

