

Criado com base em meus estudos afim de praticar HTML e CSS.
Projeto simples, mas que foi de grande soma para o meu aprendizado.

Gostaria de compartilhar com vocês o que foi feito.
Primeiramente o que foi usado no projeto:

- XAMPP
- HTML
- PHP
- MYSQLI
- BOOTSTRAP
- GIT

Agora gostaria de apresentar cada arquivo feito:

dbcon.php

	Esse arquivo foi responsável para que fosse feita a conexão com o banco via MYSQLI utilizando PHP;
	
index.php
	
	Por se tratar do arquivo mais extenso desse projeto, vou explicar conforme a estrutura:
	
	No ínicio foram criados dois includes, um para que fosse acessado o banco através do dbcon.php e outro para que fosse incluído um "header" ( cabeçalho );
	Na sequência foi criada uma estrutura em HTML para criação de toda parte visual do projeto:	
		
		<h2> : 		Referente ao título apresentado
		<button> : 	Criado um botão para que fosse adicionado um novo estudande. 
		<table> : 	Onde foi criada a tabela com suas respectivas colunas ( ID, Nome, Sobrenome, Idade, Update, Delete )
		$query : 	Criada para que fosse carregada as informações vindas do banco;
				Alguns pontos:
				mysqli_query($connection, $query) : Usada para executar a query;
				mysqli_error : Usada para fosse exibido o erro ao tentar executar a query;
				mysqli_fetch_assoc : Esta função foi responsável por trazer as informações vindas da query;
		<h6> : 		Foi utilizada para que fosse apresentada uma mensagem abaixo da tabela a cada ação;
				Foi usado a função "isset" para verificar se existe a mensagem ou não.
		<form> :	Utilziando o framework bootstrap foi criada uma modal, para ser apresentada a cada ação realizada;

header.php
	
	Criada para segregar o "cabeçalho" e poder utilizar o mesmo em outras ações.
	Dentro do header estão as dependências referentes ao bootstrap ( href="style.css" ).

footer.php
	
	Criado para segregar o "rodape" e poder utilizar o mesmo em outras ações.

style.css

	Com base nos ID`S OU CLASSES de cada item, foi feito uma customização;

Agora onde realmente onde a ação ( CRUD ) é realziada:


delete_page.php
	
	Primeiramente foi criado um include para fosse acessado o banco;
	Na sequência foi verificado se o id estava vazio ou não utilziando a função "isset";
	Por último foi realziado a ação no banco realizando o "delete" referênciando a tabela ( alunos ) e a coluna ( id ), abaixo foi feito uma verificação de conexão;

insert_data.php
	
	Primeiramente foi criado um include para fosse acessado o banco;
	Na sequência foi realizada uma verificação se a ação vinda do botão "Adicionar Estudantes" estava vindo vazia ou não;
		Caso viesse vazia, ele exibe uma mensagem : "Você precisa inserir o primeiro nome!", caso contrário os dados são inseridos no banco;
	A variável $resultado verifica se a o "insert" foi realziado com sucesso, ou não.

update_page_1.php
	
	Primeiramente foi criado um include para incluído o header ( cabeçalho );
	Foi criado um include para fosse acessado o banco;
	Foi feita uma query para que fosse selecionado no banco o elemento e aser editado com base no seu ID, dentro dessa verificação foi feita uma verificação de conexão;
	Assim que o botão "atualziar" é acionado uma nova tela é aberta (uptade_page_1.php);
		Dentro dessa nova tela temos uma referência as linhas e colunas que vieram do banco ($row['nomeColuna']);
		O valor vindo do banco através da linha ( $row ) foi nomeado ( name="nome" );
	Após realizar essa atualização dos dados vindos do banco foi feita uma verificação se o botão " editar" foi acionado ( if(isset($_POST['editar_estudantes'])) )
		Caso ele tenha sido acionado, foi a variável com atributo vinda do formulário HTML é atribuída a outra variável;
		Dentro da $query foi realizado um "update" indicando a coluna e o id referente ao banco, atualziando com base na  variável que recebeu o valor vindo do formulário HTML.
		Por último foi feito uma verificação se a atualziação foi realizada com sucesso.




	
				

	
	
		
				


		
		
	
	
	

		


		

		
			
	


