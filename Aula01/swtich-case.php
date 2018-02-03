<?php

$idade = 18;
$temHabilitacao = false;

switch (true) {
	case ($idade >18 && $idade <=25):
		echo 'jovem';
		break;

	case ($idade >13 && $idade <=18):
		echo 'adolescente';
		break;

	case ($idade > 25):
		echo 'adulto';
		break;

	default:
		echo 'voce nao existe carai';
		break;
}	