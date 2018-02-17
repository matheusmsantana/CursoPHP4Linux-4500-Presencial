	<?php
	require_once('../layout/_topo.php');
	?>
	<div class="container">
		<div class="page-header">
			<h3>Alunos</h3>
		
		</div> 
	</div>

	<?php
	require_once('../include/data/database-cursos.php');


	?>

	 <a href="new.php"> <button class="btn btn-primary">Inserir Alunos</button> </a> 

	<tbody>
<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>nome</th>
				<th>email</th>
				<th>senha</th>
				<th>cpf</th>
				<th>rg</th>
				<th>dt_nasc</th>
			</tr>
		</thead>
	
	</tbody>

	<tbody>
		<?php if(listarCursos('tb_alunos')) : ?>
			<?php foreach (listarCursos('tb_alunos') as $curso) : ?>
				<tr>
					<td> <?= $aluno['nome'] ?> </td>
					<td> <?= $aluno['email'] ?> </td>
					<td> <?= $aluno['senha'] ?> </td>
					<td> <?= $aluno['cpf'] ?> </td>
					<td> <?= $aluno['rg'] ?> </td>
					<td> <?= $aluno['dt_nasc'] ?> </td>

					
					<td>
						<a href="edit.php?id=<?= $aluno['id'] ?>"><button class="btn btn-info">Editar</button></a>
					</td>

					<td>
						<a href="delete.php?id=<?= $aluno['id'] ?>"><button class="btn btn-danger delete">Delete</button></a>
					</td>

				</tr>
			<?php endforeach ?>
		<?php endif ?>
	</tbody>


</table>

	<?php
		require_once('../layout/_rodape.php');
	?>