<?php 

require('config.php');

if (isset($_POST['curso'])) {
	
	$cur = $_POST['curso'];
	$ch = $_POST['ch'];
	$nivel = $_POST['nivel'];
	$cate = $_POST['cate']; 

		$sql = "INSERT INTO tb_cursos (nome_curso, ch, nivel, categoria) VALUES ('$cur','$ch','$nivel','$cate')";
		
	$query = mysqli_query($conexao, $sql);


	if ($query) {
			echo "<script>
    				alert('Curso adicionado!!');
    				location.href = 'filtrar.php';
				  </script>";
		} else {
			echo "<script>
    				alert('Não adicionado!!');
				  </script>";
		}

} else {

}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cadastrar curso</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 
 <div class="container">
<form class="form" method="post">
	<legend>Cadastro de cursos</legend>
	<div class="row">
		<div class="col-md-5">
			<div class="form-group">
				<label>Nome do curso</label>
				<input class="form form-control" type="text" name="curso">
			</div>
			<div class="form-group">
				<label>Carga horária</label>
				<input class="form form-control" type="text" name="ch">
			</div>
			<div class="form-group">
				<label>Nível</label>
				<input class="form form-control" type="text" name="nivel">
			</div>
			<div class="form-group">
				<label>Categoria:</label>
				<select name="cate">
					<option>-</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select>
				<p style="color: red;">OBS.: 1 - Programação; 2 - Sistemas Operacionais; 3 - Design</p>
			</div>
			<button type="submit" class="btn btn-success">CADASTRAR</button>
			<a href="filtrar.php"><button class="btn btn-danger">VOLTAR</button></a>
		</div>
		</div>
		</div>
	</div>
</form>
</div>

 </body>
 </html>