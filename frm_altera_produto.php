<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>

<body>
	
	
	<?php
	
	include "Fornecedor_select.php";
	
	
	//1-realiza a conexão com o banco de dados(local,usuario,senha,nomeBanco)
	
		include "conexao.php";
	//2-pegando o valor vindo  da url
	$id_produto= $_GET["id"];
	
	//3-criando o comndo sql para selcionar o resgstro a ser altera
	$comandoSql="select * from tb_produto where id_produto='$id_produto'";
	
	//4-executa o comando sql
	$resultado=mysqli_query($con,$comandoSql);
	
	//5-pegando  ds dados das consulta craindo  e armazenando  em ca riaveis 
	$dados=mysqli_fetch_assoc($resultado);
	
		$nome = $dados["nome_produto"];
		$quant = $dados["quantidade"];
		$forn = $dados["cod_fornecedor"];
		$local = $dados["local"];
		$prate = $dados["prateleira"];
	
	?>
	
	<div class="container">
		
		<nav class="navbar navbar-dark bg-dark">
			
			
			</nav>
		
	<h3>Alterar Produto</h3>
	
	<form name="fmrCadastraProduto" action="altera_produto.php" method="post">
		
		<div class="form-group">
		<laber for="id">ID</laber><br>
		<input type="text" name="id" required="required" class="form-control" value="<?php echo "$id_produto"; ?>" readonly>
		</div>
			
		<div class="form-group">
		<label for="produto">Nome do Produto</label><br>
		<input type="text" name="produto" required="required" class="form-control" value="<?php echo "$nome"; ?>">
		</div>
			
		<div class="form-group">
		<label for="quantidadep">Quantidade do Produto</label><br>
		<input type="text" name="quantidade" required="required" class="form-control" value="<?php echo "$quant"; ?>">
		</div>
		
		<?php
		
		lista_fornecedor_id($forn);
		
		?>
		
		
		
		
		
		<label for="local">Local de Armazenamento</label><br>
		
		<div class="form-check">
		<input type="radio" name="local" value="Sala A" <?php if($local =="Sala A" ) echo "checked=checked" ?>>Sala A<br>
		<input type="radio" name="local" value="Sala B" <?php if($local =="Sala B" ) echo "checked=checked" ?>>Sala B<br>
		<input type="radio" name="local" value="Sala C" <?php if($local =="Sala C" ) echo "checked=checked" ?>>Sala C<br>
		<input type="radio" name="local" value="Sala D" <?php if($local =="Sala D" ) echo "checked=checked" ?>>Sala D<br><br>
		</div>
		
		<label for="prateleira">Prateleira</label><br>
		
		<div class="form-check">
		<input type="radio" name="prateleira" value="P1" <?php if($prate =="P1" ) echo "checked=checked" ?>>P1<br>
		<input type="radio" name="prateleira" value="P2" <?php if($prate =="P2" ) echo "checked=checked" ?>>P2<br>
		<input type="radio" name="prateleira" value="P3" <?php if($prate =="P3" ) echo "checked=checked" ?>>P3<br>
		<input type="radio" name="prateleira" value="P4" <?php if($prate =="P4" ) echo "checked=checked" ?>>P4<br>
		</div><br>
		
		
		<input type="submit" name="cadastrar" value="Alterar" class="btn btn-dark">
       	<a href="lista_produto.php" class="btn btn-dark">Voltar</a>
		
	</form>
	</div>
</body>
</html>