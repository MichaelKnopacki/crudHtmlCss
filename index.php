<?php include ('header.php');?>
<?php include ('dbcon.php');?>

	<div>
	<h2 id="quadro1">Estudantes</h2>
	<button id="botao" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
		Adicionar Estudante
	</button>
	</div>
		<table class= "table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>Idade</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>

				<?php

				$query = "select * from alunos";

				$dados = mysqli_query($connection, $query);

				if(!$dados){
					die("A query falhou".mysqli_error());
				}else{
					//print_r($dados); Teste de conexão
				}

					while ($row = mysqli_fetch_assoc($dados)){
						?>
						<tr>
							<td><?php echo $row['id'] ?></td>
							<td><?php echo $row['primeiroNome'] ?></td>
							<td><?php echo $row['sobrenome'] ?></td>
							<td><?php echo $row['idade'] ?></td>
							<td><a href="uptade_page_1.php?id=<?php echo $row['id'];?>" id="atualizar" class="btn btn-sucess">Atualizar</a></td>
							<td><a href="delete_page.php?id=<?php echo $row['id'];?>" id="perigo" class="btn btn-perigo">Delete</a></td>
						</tr>
						<?php
					}

				?>
			</tbody>
		</table>

		<?php
			if(isset($_GET['message'])){
				echo "<h6>".$_GET['message']."</h6>";
			}
		?>

		<?php
			if(isset($_GET['insert_msg'])){
				echo "<h6>".$_GET['insert_msg']."</h6>";
			}
		?>

		<?php
			if(isset($_GET['update_msg'])){
				echo "<h6>".$_GET['update_msg']."</h6>";
			}
		?>

		<?php
			if(isset($_GET['delete_msg'])){
				echo "<h6>".$_GET['delete_msg']."</h6>";
			}
		?>

		<form action="insert_data.php" method="post">
		<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Adicionar Estudante</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <div class="form-grupo">
		        	<label for="p_nome">Primeiro Name</label>
		        	<input type="text" name="p_nome" class="form-control">
		        </div>
		        <div class="form-grupo">
		        	<label for="sobrenome">Sobrenome</label>
		        	<input type="text" name="sobrenome" class="form-control">
		        </div>
		        <div class="form-grupo">
		        	<label for="idade">Idade</label>
		        	<input type="text" name="idade" class="form-control">
		        </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		        <input type="submit" class="btn btn-primary" name="add_estudantes" value="ADD">
		      </div>
		    </div>
		  </div>
		</div>

<?php include ("footer.php")?>