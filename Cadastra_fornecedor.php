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
	$n = $_POST["fornecedor"];
	$e = $_POST["endereco"];
	$c = $_POST["cnpj"];
	$q = $_POST["quantf"];
	$d = $_POST["dt"];
	
	/*1- definindo a conexao - local, usuario, senha e banco de dados*/
		include ("conexao.php");
	
	/*2-definindo o comando sql a ser usado */
		 $comandoSql="insert into tb_fornecedor(nome_fornecedor, endereco, cnpj, quantidade, dataEntrega)
		 values('$n','$e','$c','$q', '$d')";
	
	/*3-executando o comando sql */ 
        $resultado= mysqli_query($con, $comandoSql);
	
	/*4-conferindo se o registro foi inserido*/  
		 if($resultado==true){
					 
		  	echo "Dados gravados com sucesso ";
			echo "<br>";
			echo "<a href=frm_Cadastra_fornecedor.php class='btn btn-dark'>Voltar</a>";
			echo " ";
		
			 
		 }else{
			 echo "Não foi possivel a gravacao";
			
		 }
	
	?>
		</div>
</body>
</html>