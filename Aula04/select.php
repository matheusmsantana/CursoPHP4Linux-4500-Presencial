<?php
	
	require_once ('conexaopostgres.php');

	$usuario = 'matheus12333';
	$senha = '12333';


	$query = "SELECT * FROM usuarios;";

	//echo $query;

	$result = pg_query($test,$query);

	$arr = pg_fetch_all($result);

	var_dump($arr);