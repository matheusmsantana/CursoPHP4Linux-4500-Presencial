<?php


/*0 10
	while, do while e for
	numeros pares
	numeros impares
	multiplos de 5*/

$i = 0;
/*while($i<100){

	if($i%2 == 0){
		echo $i . ': e par <br>';
		
	}

	if($i%2!=0){
		echo $i . ': e impar <br>';
		
	}

	if($i%5 == 0){
		echo $i . ': e multiplo de 5 <br>';
		
	}
	$i++
}*/

/*for(;$i<100;$i++){

	if($i%2 == 3){
		continue
	}

	if($i%2 == 0){
		echo $i . ': e par <br>';
		
	}

	if($i%2!=0){
		echo $i . ': e impar <br>';
		
	}

	if($i%5 == 0){
		echo $i . ': e multiplo de 5 <br>';
		
	}
	
	if($i == 98){
		break;
	}

	$i++
}*/

do{

	if($i%2 == 0){
		echo $i . ': e par <br>';
		
	}
	if($i%2!=0){
		echo $i . ': e impar <br>';
		
	}

	if($i%5 == 0){
		echo $i . ': e multiplo de 5 <br>';
	}

	if($i == 98){
		break;
	}

	$i++;
}while($i<100);
