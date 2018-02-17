<?php


	require_once('conexao.php');

	var_dump(conecta());

	function inserirCurso(array $curso)
	{
		$con = conecta();
		$sql = " INSERT INTO tb_cursos(nome, tipo, carga_horaria, requisitos) VALUES('{$curso['nome']}', '{$curso['tipo']}', '{$curso['carga_horaria']}', '{$curso['requisitos']}')";
		//$sql.= " VALUES('{$curso[nome]}', '{$curso[tipo]}', '{$curso[carga_horaria]}', '{$curso[requisitos]}') ";

		pg_query($sql);
		desconecta($con);
	}

	$curso = array('nome' => 'SURUBA', 'tipo' => 'TEST', 'carga_horaria' => '3', 'requisitos' => 'nada');

	//inserirCurso($curso);

	function listarCursos($tabela)
	{
		$con = conecta();
		$sql = " SELECT * FROM $tabela;";

		$result = pg_query($sql);

		$resultado = pg_fetch_assoc($result);

		return $resultado;

		desconecta($con);
	}

	//$test = listarCursos('tb_cursos');

	//var_dump($test);


	//inserirCurso($curso);

	function listarCursosID($tabela, $id)
	{
		$con = conecta();
		$sql = " SELECT * FROM $tabela WHERE id={$id};";

		$result = pg_query($sql);

		$resultado = pg_fetch_assoc($result);

		return $resultado;

		desconecta($con);
	}

	//$test = listarCursosID('tb_cursos', 1);

	var_dump($test);