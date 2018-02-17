	
	<?php
	require_once('../layout/_topo.php');
	require_once('../include/data/database-cursos.php');
	?>

	<?php
		$id = $_GET['id'];
		$curso = listarCursosID('tb_cursos', $id); 
		var_dump($curso);
	?> 

	<div class="container">
		<div class="page-header">
			<h3>Editar Curso</h3>
		
		</div> 
	</div>

	<form action="#" method="post">
		<div class="form-group">
			<label for>Curso</label>
			<input type="text" name="nome" class="form-control" required value="<?= $curso['nome'] ?>" />
		</div>

		<div class="form-group">
			<label for>Curso</label>
			<select type="text" name="tipo" class="form-control" value="<?= $curso['tipo'] ?>"/>
				<option value="EAD">EAD</option>
				<option value="presencial" selected>presencial</option>
			</select>
		</div>

		<div class="form-group">
			<label for>Carga Horaria</label>
			<input type="text" name="carga_horaria" class="form-control" required value="<?= $curso['carga_horaria'] ?>"/>
		</div>

		<div class="form-group">
			<label for>Requisitos</label>
			<input type="text" name="requisitos" class="form-control" required value="<?= $curso['requisitos'] ?>"/>
		</div>

		<input type="submit" value="enviar" class="btn btn-primary">

	</form>	

	<?php 
		if($_POST){

			$cursos = $_POST;
			var_dump($cursos);
			//die();
			update('tb_cursos', $id, $cursos);
			header('Location: index.php');
		}
	?>