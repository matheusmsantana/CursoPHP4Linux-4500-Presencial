
<?php
 	require_once('../include/data/database-cursos.php');

 	$id = $_GET['id'];

 	if($id){
 		delete('tb_cursos', $id);

 		header('Location: index.php');
 	}


