<?php include ('header.php');?>
<?php include ('dbcon.php');?>

<?php

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$query = "select * from alunos where id ='$id'";

	$dados = mysqli_query($connection, $query);

		if(!$dados){
			die("A query falhou".mysqli_error());
		}else{
			$row = mysqli_fetch_assoc($dados);	
		}	
}

?>

<?php
	if(isset($_POST['editar_estudantes'])){

			if(isset($_GET['id_new'])){
				$idnew = $_GET['id_new'];
			}

		$pnome = $_POST['p_nome'];
		$snome = $_POST['sobrenome'];
		$ida = $_POST['idade'];

		$query = "update `alunos` set `primeiroNome` = '$pnome', `sobrenome` = '$snome', `idade` = '$ida' where `id` = '$idnew'";

		$dados = mysqli_query($connection, $query);

			if(!$dados){
				die("A query falhou".mysqli_error());
			}else{
				header('location:index.php?update_msg= Alterado com sucesso.');
			}
	}
?>

<form action="uptade_page_1.php?id_new=<?php echo $id; ?>" method="post">
	<div class="form-grupo">
		<label for="p_nome">Primeiro Name</label>
		<input type="text" name="p_nome" class="form-control" value="<?php echo $row['primeiroNome']?>">
	</div>
	<div class="form-grupo">
		<label for="sobrenome">Sobrenome</label>
		<input type="text" name="sobrenome" class="form-control" value="<?php echo $row['sobrenome']?>">
	</div>
	<div class="form-grupo">
		<label for="idade">Idade</label>
		<input type="text" name="idade" class="form-control" value="<?php echo $row['idade']?>">
	</div>
</br>
	<input type="submit" class="btn btn-primary" name="editar_estudantes" value="EDITAR">
</form>

<?php include ('footer.php');?>
