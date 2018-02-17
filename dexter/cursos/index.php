	<?php
	require_once('../layout/_topo.php');
	?>
	<div class="container">
		<div class="page-header">
			<h3>Cursos</h3>
		
		</div> 
	</div>

	<?php
	require_once('../include/data/database-cursos.php');


	?>

	 <a href="new.php"> <button class="btn btn-primary">Inserir Curso</button> </a> 

	<tbody>
<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>curso</th>
				<th>tipo</th>
				<th>carga hora</th>
				<th>requisitos</th>
				<th>acoes</th>
			</tr>
		</thead>
	
	</tbody>

	<tbody>
		<?php if(listarCursos('tb_cursos')) : ?>
			<?php foreach (listarCursos('tb_cursos') as $curso) : ?>
				<tr>
					<td> <?= $curso['id'] ?> </td>
					<td> <?= $curso['nome'] ?> </td>
					<td> <?= $curso['tipo'] ?> </td>
					<td> <?= $curso['carga_horaria'] ?> </td>
					<td> <?= $curso['requisitos'] ?> </td>

					
					<td>
					<!--<form action="editar.php" method="post">
						<input type="hidden" name="id" value="<?=$curso['id']?>" />
						<button type="submit" class="btn btn-info">editar</button>
					</form>
					</td>-->

					<script type="text/javascript">
						var delete = document.querySelector('.delete');

					</script>

						<a href="edit.php?id=<?= $curso['id'] ?>"><button class="btn btn-info">Editar</button></a>
					</td>
					<td>
						<a href="delete.php?id=<?= $curso['id'] ?>"><button class="btn btn-danger delete">Delete</button></a>
					</td>

				</tr>
			<?php endforeach ?>
		<?php endif ?>
	</tbody>


</table>

	<?php
	require_once('../layout/_rodape.php');
	?>