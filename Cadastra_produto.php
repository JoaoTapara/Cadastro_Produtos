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
	<?php
	/*pegando os dados vindos do formulario */
	$n = $_POST["produto"];
	$q = $_POST["quantidadep"];
	$f = $_POST["fornecedor"];
	$l = $_POST["local"];
	$p = $_POST["prateleira"];
	
	/*1- definindo a conexao - local, usuario, senha e banco de dados*/
		include ("conexao.php");
	
	/*2-definindo o comando sql a ser usado */
		 $comandoSql="insert into tb_produto(nome_produto, quantidade, cod_fornecedor, local,prateleira)
		 values('$n','$q', '$f', '$l','$p')";
	
	/*3-executando o comando sql */ 
        $resultado= mysqli_query($con, $comandoSql);
	
	/*4-conferindo se o registro foi inserido*/  
		 if($resultado==true){
					 
		  	echo "Dados gravados com sucesso ";
			echo "<br>";
			echo "<a href=frm_Cadastra_produto.php class='btn btn-dark'>Voltar</a>";
			echo " ";
			
			 
		 }else{
			 echo "Não foi possivel a gravacao";
			
		 }
	
	?>
		</div>
</body>
</html>