<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastra Produto</title>
</head>

<body>
	
	<?php
	include "Fornecedor_select.php";
	include "menu.php";
	?>
	<div class="container">
	
	<h3>Cadastrar Produto</h3>
	
	<form name="fmrCadastraProduto" action="Cadastra_produto.php" method="post">
		
		<div class="form-group">
		<label for="produto">Nome do Produto.</label>
		<input type="text" name="produto" required="required" class="form-control">
		</div>
		
		<label for="quantidadep">Quantidade do Produto.</label><br>
		<input type="text" name="quantidadep" required="required" class="form-control"><br><br>
		
		<?php
		
		   lista_fornecedor();
		
		?><br><br>
		
		<label for="local">Local de Armazenamento.</label><br>
		
		<div class="form-check">
			
		<input type="radio" name="local" value="Sala A">Sala A<br>
		<input type="radio" name="local" value="Sala B">Sala B<br>
		<input type="radio" name="local" value="Sala C">Sala C<br>
		<input type="radio" name="local" value="Sala D">Sala D<br><br>
		
		</div>
		
		
		
		<label for="prateleira">Prateleira.</label><br>
		
		<div class="form-check">
		
		<input type="radio" name="prateleira" value="P1">P1<br>
		<input type="radio" name="prateleira" value="P2">P2<br>
		<input type="radio" name="prateleira" value="P3">P3<br>
		<input type="radio" name="prateleira" value="P4">P4<br>
		
		</div>
		
		
		
		<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-dark">
        <input type="reset" name="limpar" value="limpar" class="btn btn-dark">
		
		
		
	</form>
	</div>
</body>
</html>