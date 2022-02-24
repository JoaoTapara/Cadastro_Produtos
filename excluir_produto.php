<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php
	
	//1-realizar a conexão com o banco de dados(local,usuario,senha,nomeBanco).
		include "conexao.php";
	
	//2-pegendo o valor indo da url.
		$id_produto = $_GET["id"];
	
	//3_crinado o comando sql para excluao do registro.
		$comandoSql = "delete from tb_produto where id_produto='$id_produto'";
	
	//4-executando o comando sql.
	$resultado=mysqli_query($con,$comandoSql);
	
	//5-verificar se o comando sql foi executado.
	if($resultado==true){
		echo "Excluido com sucesso";
	}else{
		echo "Erro na exclusão";
	}
	
	echo "<br> <a href='lista_produto.php'>Lista de Produtos </a>";
	
	?>
	

</body>
</html>