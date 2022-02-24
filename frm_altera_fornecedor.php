<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>

<body>
	
	<?php
	
	//1-realiza a conexão com o banco de dados(local,usuario,senha,nomeBanco)
	//$con=mysqli_connect("localhost","root","","bd_projeto");
		include "conexao.php";
		include ""
	//2-pegando o valor vindo  da url
	$id_fornecedor=$_GET["id"];
	
	//3-criando o comndo sql para selcionar o resgstro a ser altera
	$comandoSql="select * from tb_fornecedor where id_fornecedor='$id_fornecedor'";
	
	//4-executa o comando sql
	$resultado=mysqli_query($con,$comandoSql);
	
	//5-pegando  ds dados das consulta craindo  e armazenando  em ca riaveis 
	$dados=mysqli_fetch_assoc($resultado);
	
		$id = $dados["id_fornecedor"];
		$nome = $dados["nome_fornecedor"];
		$ende = $dados["endereco"];
		$cnpj = $dados["cnpj"];
		$quant = $dados["quantidade"];
		$data = $dados["dataEntrega"];
		
		
	?>
	<div class="container">
	
	<nav class="navbar navbar-dark bg-dark">
		
	</nav>
	
		
	<h3>Cadastrar Fornecedor</h3>
	
	
	<form name="fmrCadastraFornecedor" action="altera_fornecedor.php" method="post">
		
		<div class="form-group">
		<label for="id">ID</label><br>
		<input type="text" name="id" required="required" class="form-control" value="<?php echo"$id "?>">
		</div>
			
		<div class="form-group">	
		<label for="fornecedor">Nome do Fornecedor</label><br>
		<input type="text" name="fornecedor" required="required" class="form-control" value="<?php echo "$nome" ?>">
		</div>
			
		<div class="form-group">
		<label for="endereco">Endereço</label><br>
		<input type="text" name="endereco" required="required" class="form-control" value="<?php echo "$ende" ?>">
		</div>
			
		<div class="form-group">
		<label for="cnpj">CNPJ</label><br>
		<input type="text" name="cnpj" required="required" class="form-control" value="<?php echo "$cnpj " ?>">
		</div>
			
		
		<label for="quantf">Quantidade Fornecida</label><br>
		
		<div class="form-check">
		<input type="radio" name="quantf" value="50" <?php if($quant == "50") echo "checked=checked" ?>>50<br>
		<input type="radio" name="quantf" value="150" <?php if($quant == "150") echo "checked=checked" ?>>150<br>
		<input type="radio" name="quantf" value="250" <?php if($quant == "250") echo "checked=checked" ?>>250<br>
		<input type="radio" name="quantf" value="350" <?php if($quant == "350") echo "checked=checked" ?>>350<br><br>
		</div>
		
		
		<label for="dt">Data das Entregas</label><br>
		
		<div class="form-check">
		<input type="radio" name="dt" value="Começo do mes" <?php if($data == "Começo do mes") echo "checked=checked" ?>>Começo do mes<br>
		<input type="radio" name="dt" value="Final do mes" <?php if($data == "Final do mes") echo "checked=checked" ?>>Final do mes<br>
		<input type="radio" name="dt" value="Começo e final do mes" <?php if($data == "Começo e final do mes") echo "checked=checked" ?>>Começo e final do mes<br>
		</div><br>
		
		
		<input type="submit" name="cadastrar" value="Alterar"  class="btn btn-dark">
       <a href="lista_fornecedor.php" class="btn btn-dark">Voltar</a>
		
	
		
	
	</form>
	
	
</body>
</html>