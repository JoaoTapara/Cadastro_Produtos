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
		
	<h3>Lista de Produtos Cadastrados</h3>
	
	<?php
	
	/* 1- realizar a conecxao com o banco de dados (local,usuario,senha,nomeBanco)*/

	$con= mysqli_connect("localhost","root","","projetofinal");

	/*2- criando o comando sql para consultar dos registros */ 
	
	//$comandoSql= "select * from tb_produto";

	$comandoSql= "select * from tb_produto, tb_fornecedor where tb_produto.cod_fornecedor = tb_fornecedor.id_fornecedor";
	 
	/*3- executando o comendo sql*/

	$resultado= mysqli_query($con,$comandoSql);
		
		?>
		
		<table class="table">
		  <thead class="thead-light">
			<tr>
			  	<th scope="col">#</th>
			  	<th scope="col">Nome</th>
			  	<th scope="col">Quantidade</th>
			  	<th scope="col">Fornecedor</th>
				<th scope="col">Local de Armaz.</th>
				<th scope="col">Prateleira</th>
				<th scope="col">Altera</th>
				<th scope="col">Excluir</th>
			</tr>
		  </thead>
		 <tbody>
		
	<?php
	/*4- pegando os dados da consulta crinado e exibindo*/
	
	while($dados=mysqli_fetch_assoc($resultado)){
	$id = $dados["id_produto"];
	$nome = $dados["nome_produto"];
	$nomef = $dados["nome_fornecedor"];
	$quant = $dados["quantidade"];
	$forn = $dados["cod_fornecedor"];
	$local = $dados["local"];
	$prateleira = $dados["prateleira"];
		
		?>
	   <tr>
		  <th scope="row"><?php echo $id  ?></th>
		  <td><?php echo $nome ?></td>
		  <td><?php echo $quant ?></td>
		  <td><?php echo $nomef ?></td>
		  <td><?php echo $local ?></td>
		  <td><?php echo $prateleira ?></td>
		  <td><a href=frm_altera_produto.php?id=<?php echo $id?>> <img src="imagens/editar_ic.png"> </a></td>
		  <td><a href=excluir_produto.php?id=<?php echo $id?>> <img src="imagens/excluir_ic.png"> </a></td>   
		</tr>
        </tbody>
			
    <?php
	

		
	}
	

	?>
	
	</div>
		
</body>
</html>