<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	
	<?php
	include "menu.php";
	?>
		
	<div class="container">
		
	<h3>Lista de Fornecedores Cadastrados</h3>
	
	<?php
	
	/* 1- realizar a conecxao com o banco de dados (local,usuario,senha,nomeBanco)*/

	$con= mysqli_connect("localhost","root","","projetofinal");

	/*2- criando o comando sql para consultar dos registros */ 
	
	//$comandoSql= "select * from tb_produto";

	$comandoSql= "select * from tb_fornecedor";
	 
	/*3- executando o comendo sql*/

	$resultado= mysqli_query($con,$comandoSql);
		
	?>
		
		<table class="table">
		  <thead class="thead-light">
			<tr>
			  	<th scope="col">#</th>
			  	<th scope="col">Nome</th>
			  	<th scope="col">Endereço</th>
			  	<th scope="col">CNPJ</th>
				<th scope="col">Quantidade</th>
				<th scope="col">Data de Entrega</th>
				<th scope="col">Altera</th>
				<th scope="col">Excluir</th>
			</tr>
		  </thead>
		 <tbody>
		
	<?php
	/*4- pegando os dados da consulta crinado e exibindo*/
	
	while($dados=mysqli_fetch_assoc($resultado)){
	$id = $dados["id_fornecedor"];
	$nome = $dados["nome_fornecedor"];
	$ende = $dados["endereco"];
	$cnpj = $dados["cnpj"];
	$quant = $dados["quantidade"];
	$data = $dados["dataEntrega"];
	?>
	   <tr>
		  <th scope="row"><?php echo $id  ?></th>
		  <td><?php echo $nome ?></td>
		  <td><?php echo $ende ?></td>
		  <td><?php echo $cnpj ?></td>
		  <td><?php echo $quant ?></td>
		  <td><?php echo $data ?></td>
		  <td><a href=frm_altera_fornecedor.php?id=<?php echo $id?>> <img src="imagens/editar_ic.png"> </a></td>
		  <td><a href=excluir_fornecedor.php?id=<?php echo $id?>> <img src="imagens/excluir_ic.png"> </a></td>   
		</tr>
        </tbody>
			
    <?php
	
		/*echo "ID: $id <br>";
		echo "Nome: $nome <br>";
		echo "Endereço: $ende <br>";
		echo "CNPJ: $cnpj<br>";
		echo "Quantidade: $quant<br>";
		echo "Data da Entrega: $data<br><br>";
		
		echo "<a href=excluir_fornecedor.php?id=$id> Excluir </a>";
		echo "<a href=frm_altera_fornecedor.php?id=$id> Alterar </a>";*/
		
	}
	
	?>
		
	</div>
		
</body>
</html>