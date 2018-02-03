<?php


	require_once ('conexaopostgres.php');

	function inserirUsuario(array $dados){

		$con = conecta();

		$query = "";

		pg_query($con,$query);

		desconecta($con);

	}

	function atualizarUsuario(array $dados, int $id){

		$con = conecta();

		$query = "";

		pg_query($con,$query);

		desconecta($con);

	}


	function deletarUsuario(int $id){

		$con = conecta();

		$query = "";

		pg_query($con,$query);

		desconecta($con);

	}

	function listarUsuario(){		

		$con = conecta();

		$query = "";

		$result = pg_query($con,$query);

		$arr = pg_fetch_all($result);

		desconecta($con);

	}