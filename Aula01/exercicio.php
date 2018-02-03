<?php

//aprovado 
	//nota>=7 e frequencia >=8

//recuperacao
	//nota>=5 e nota <7 e frequencia <=8

//reprovado 
	//nota <5 ou frequencia <8


//exercicio if
$nota =4;
$frequencia = 8;

if($nota>= 7 && $frequencia >=8){
	echo 'aprovado';
}elseif($nota>=5 && $nota <7 && $frequencia <=8){
	echo 'recuperacao';
}else{
	echo 'reprovado';
}

echo '<hr><br>';

//exercicio swtich
switch (true) {
	case ($nota>= 7 && $frequencia >=8):
		echo 'aprovado';
		break;
	case ($nota>=5 && $nota <7 && $frequencia <=8):
		echo 'recuperacao';	
		break;
	default:
		echo 'reprovado';
		break;
}
