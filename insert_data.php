<?php
	include 'dbcon.php';
	
 	if(isset($_POST['add_estudantes'])){
 	
 	$pnome = $_POST['p_nome'];
 	$sobrenome = $_POST['sobrenome'];
 	$idade = $_POST['idade'];

	 	if($pnome == "" || empty($pnome)){
	 		header('location:index.php?message=Você precisa inserir o primeiro nome!');
	 	}
	 	else{
		$query = "insert into `alunos` (`primeiroNome`, `sobrenome`, `idade`) values ('$pnome', '$sobrenome', '$idade' )";

	$resultado = mysqli_query($connection, $query);

		if (!$resultado){
			die("Query falhou".mysqli_error());
		}
		else{
			header('location:index.php?insert_msg=Adicionado com sucesso');
		}
	}
 }

?>