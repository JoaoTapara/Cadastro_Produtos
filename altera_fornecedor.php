<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php
	
	include "conexao.php";
	
	
	$id = $_POST["id"];
	$nome = $_POST["fornecedor"];
	$ender = $_POST["endereco"];
	$cnpj = $_POST["cnpj"];
	$quanti = $_POST["quantf"];
	$data = $_POST["dt"];
	
	$comandoSql="update tb_fornecedor set 
	nome_fornecedor='$nome',
	endereco='$ender',
	cnpj='$ender',
	quantidade='$quanti',
	dataEntrega='$data' 
	where id_fornecedor='$id'";
	
	$resultado=mysqli_query($con,$comandoSql);
	
	if($resultado==true){
		echo "Alterado com sucesso";
	}else{
		echo "Erro na alteração";
	}
	 
	echo "<br> <a href='lista_fornecedor.php'>lista cliente</a>";
	
	?>
	
</body>
</html>