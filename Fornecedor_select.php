<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>

<body>
	
	<?php
	
	function lista_fornecedor(){
	
		include "conexao.php";

   
     $comandoSql="select*from tb_fornecedor";

 
     $resultado=mysqli_query($con,$comandoSql);
      
	?>
	
	 <div class="form-group">
	<label for="fornecedor"> Fornecedor </label><br>
	<select name="fornecedor" id="fornecedor" class="form-control">
		
	
	
	<?php
     /*4-Pegando os dados da consuta criada e exibindo*/
     while($dados=mysqli_fetch_assoc($resultado)){
     	$id=$dados["id_fornecedor"];
     	$nome=$dados["nome_fornecedor"];

		 echo "<option value=$id class='form-control'> $nome </option>";
     }
	
		echo "</select></divi>";
	
	}
	
	
	
	
	
	
	
	
	function lista_fornecedor_id($cod_fornecedor){
	
		include "conexao.php";

   
     $comandoSql="select*from tb_fornecedor";

 
     $resultado=mysqli_query($con,$comandoSql);
      
	?>
	
	<div class="form-group">
	<label for="fornecedor"> Fornecedor </label>
	<select name="fornecedor" id="fornecedor" class="form-control">
		
	
	
	<?php
     /*4-Pegando os dados da consuta criada e exibindo*/
     while($dados=mysqli_fetch_assoc($resultado)){
     	$id=$dados["id_fornecedor"];
     	$nome=$dados["nome_fornecedor"];
		 
		 if($id == $cod_fornecedor){
			 
		 echo "<option value=$id selected> $nome </option>";
			 
		 }else{
			 echo "<option value=$id> $nome </option>";
		 }
     }
	
		echo "</select></div>";
	
	}
	
	?>

</body>
</html>