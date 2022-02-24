<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style type="text/css">
      
      .containerLogin { 

        width: 350px;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 150px;
        border-radius: 10px;

      }

      .centroLogin{

        margin-left: 50px;


      }

      .txtRedondo{
        border-radius: 8px;
        width: 250px;
      }

      body{
        background-color:#D3D3D3 ;
      }


    </style>

    <title>Login</title>
  </head>
  <body >
	  
    
    <div class="containerLogin bg-secondary">
       <center><h2> Login </h2></center>
        <form name="frmLogin"    action="login.php"  method="POST" class="centroLogin">
         <label for="usuario" class="font-italic">Usuario</label><br>
         <input type="text" name="usuario" class="txtRedondo"><br>
		 
		 
		 <label for="senha" class="font-italic">Senha </label><br>
         <input type="password" name="senha" class="txtRedondo"><br>
		 
		 <br>
		 <input type="submit" name="logar" value="Logar" class="btn btn-dark">
         <input type="reset" name="limpar" value="limpar" class="btn btn-dark">
       

	</form>
    

	   
	   </div>
	

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

