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
	$nome = $_POST["produto"];
	$quantidade = $_POST["quantidade"];
	$forne =$_POST["fornecedor"];
	$local = $_POST["local"];
	$prateleira =$_POST["prateleira"];
	
	$comandoSql="update tb_produto set 
	nome_produto='$nome',
	quantidade='$quantidade',
	cod_fornecedor='$forne',
	local='$local',
	prateleira='$prateleira' where id_produto='$id'";
		

	$resultado=mysqli_query($con,$comandoSql);
	
	if($resultado==true){
		echo "Alterado com sucesso";
	}else{
		echo "Erro na alteração";
	}
	 
	echo "<br> <a href='lista_produto.php'>lista cliente</a>";
	
	
	?>
	
</body>
</html>