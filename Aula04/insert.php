<?php
	
	require_once ('conexaopostgres.php');

	$usuario = 'matheus123';
	$senha = '123';


	$query = "INSERT INTO usuarios(usuario,senha) VALUES ('$usuario','$senha');";

	echo $query;

	$result = pg_query($test,$query);

	 var_dump($result);