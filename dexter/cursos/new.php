	
	<?php
	require_once('../layout/_topo.php');
	require_once('../include/data/database-cursos.php');
	?>

	<div class="container">
		<div class="page-header">
			<h3>novo curso</h3>
		
		</div> 
	</div>	

	<form action="#" method="post">
		<div class="form-group">
			<label for>Curso</label>
			<input type="text" name="nome" class="form-control" placeholder="curso" required />
		</div>

		<div class="form-group">
			<label for>Curso</label>
			<select type="text" name="tipo" class="form-control">
				<option value="EAD">EAD</option>
				<option value="presencial" selected>presencial</option>
			</select>
		</div>

		<div class="form-group">
			<label for>Carga Horaria</label>
			<input type="text" name="carga_horaria" class="form-control" placeholder="carga horaria" required />
		</div>

		<div class="form-group">
			<label for>Requisitos</label>
			<input type="text" name="requisitos" class="form-control" placeholder="requisitos" required />
		</div>

		<input type="submit" value="enviar" class="btn btn-primary">

	</form>	

	<?php

		if($_POST){
				
			$curso = array('nome' => $_POST['nome'], 'tipo' => $_POST['tipo'], 'carga_horaria' => $_POST['carga_horaria'], 'requisitos' => $_POST['requisitos'],);
			inserirCurso($curso);
			header('Location: index.php');
		}

	?>

	<?php
	require_once('../layout/_rodape.php');
	?>