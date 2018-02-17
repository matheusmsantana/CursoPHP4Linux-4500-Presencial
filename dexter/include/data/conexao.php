<?php
	
	$host = 'localhost';
	$port = '5432';
	$dbname = 'dexterescola';
	$user = 'matheus';
	$pass = '63970719';


	
	$con_string =  "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";


	function conecta(){
		global	$con_string;
		return pg_connect($con_string);

	}

	function desconecta(){
		global	$con_string;
		return pg_connect($con_string);
	}

	