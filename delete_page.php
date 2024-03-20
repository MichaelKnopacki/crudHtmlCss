<?php include ('dbcon.php');?>

<?php

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	
	$query = "delete from `alunos` where `id` = '$id'";

	$resultado = mysqli_query($connection, $query);

	if(!$resultado){
		die("A query falhou".mysqli_error());
	}else{
		header('location:index.php?delete_msg=Deletado');	
	}
}
?>