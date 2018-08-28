<!DOCTYPE html>
<html>
<head>
	<title>Filtrar</title>

	<?php 

		require('config.php');

		$sql = "SELECT * FROM curso";
		$sql_cat = "SELECT * FROM categoria";

		if (isset($_GET['categoria'])) {
			$sql_filt = "SELECT * FROM curso WHERE FK_categoria_id = '".$_GET['categoria']."'";

			if ($_GET['categoria'] == 'cada') {
				header('location: cadastrar.php');
			}
		}

		$query = mysqli_query($conexao, $sql_filt);
		$query_cat = mysqli_query($conexao, $sql_cat);

	 ?>

	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

<div class="container-fluid">

	<div style="background-color: rgba(0,0,0,0.7);" class="navbar">
		<form method="get">
		<select name="categoria">
			<?php 
			while ($dados = mysqli_fetch_assoc($query_cat)) {
			?>
				<option value="<?php echo $dados['id']?>">
					<?php echo $dados['nome']?>
				</option>
			<?php } ?>
		</select>
		<input type="submit" value="Filtrar">
	</form>
	</div>

	<div class="container-fluid">
	<div class="row">
	<?php 
			while ($dados = mysqli_fetch_assoc($query)) {
				echo "
				<div class='col-md-3'>
				<img class='thumbnail img-responsive' style='width: 50%;' src='images/".$dados['imagem'].".png' width='150'>
				".$dados['nome']."
				</div>
				";
				
			}
		?>
	</div>
	</div>
</div>

</body>
</html>