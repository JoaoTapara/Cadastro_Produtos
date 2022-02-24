<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastra Fornecedor</title>
</head>

<body>
	
	<?php
	 include "menu.php";
	
	
	?>
	
	<div class="container">
	
	<h3>Cadastrar Fornecedor</h3>
	
	<form name="fmrCadastraFornecedor" action="Cadastra_fornecedor.php" method="post">
		
		<div class="form-group">
		<label for="fornecedor">Nome do Fornecedor</label><br>
		<input type="text" name="fornecedor" required="required" class="form-control">
		</div>
		
		<div class="form-group">
		<label for="endereco">Endereço</label><br>
		<input type="text" name="endereco" required="required" class="form-control">
		</div>
			
		<div class="form-group">
		<label for="cnpj">CNPJ</label><br>
		<input type="text" name="cnpj" required="required" class="form-control">
		</div>
			
		
		
		<label for="quantf">Quantidade Fornecida</label><br>
		
		<div class="form-check">
		<input type="radio" name="quantf" value="50">50<br>
		<input type="radio" name="quantf" value="150">150<br>
		<input type="radio" name="quantf" value="250">250<br>
		<input type="radio" name="quantf" value="350">350<br><br>
		</div>
		
		
		<label for="dt">Data das Entregas</label><br>
		
		<div class="form-check">
		<input type="radio" name="dt" value="Começo do mes">Começo do mes<br>
		<input type="radio" name="dt" value="Final do mes">Final do mes<br>
		<input type="radio" name="dt" value="Começo e final do mes">Começo e final do mes<br>
		</div><br>
		
		
		<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-dark">
        <input type="reset" name="limpar" value="limpar" class="btn btn-dark">
	
		
	
	</form>
	
	</div>
</body>
</html>