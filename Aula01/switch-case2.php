<?php

$idade = 18;
$temHabilitacao = false;

switch (true) {
	case ($idade >18 && $idade <=25):
		echo 'jovem <br>';
		

	case ($idade >13 && $idade <=18):
		echo 'adolescente <br>';
		

	case ($idade > 25):
		echo 'adulto <br>';
		

	default:
		echo 'voce nao existe carai';
		break;
}	