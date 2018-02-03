<?php
	
	require_once ('conexaopostgres.php');

	$usuario = 'matheus12333';
	$senha = '12333';


	$query = "DELETE FROM usuarios WHERE id = 3;";

	echo $query;

	$result = pg_query($test,$query);

	var_dump($result);