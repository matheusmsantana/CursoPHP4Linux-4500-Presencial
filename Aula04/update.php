<?php
	
	require_once ('conexaopostgres.php');

	$usuario = 'matheusMarquesSantana';
	$senha = '12333';


	$query = "UPDATE usuarios SET usuario = '{$usuario}' WHERE id = 1;";

	echo $query;

	$result = pg_query($test,$query);

	 var_dump($result);