<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--Tags básicas do head-->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays em PHP</title>
	<!--Link dos nossos arquivos CSS e JS padrão-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/scripts.js"></script>
	<!--Link dos arquivos CSS e JS do Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>

	<div class="container">
		<br>
		<form method="get" action="index.php">
			<div class="row" id="caixaLogin">
				<div class="col-md-5" style="font-size:1.2em">
					<strong>Quer editar os Deuses Nórdicos?</strong>
				</div>
				<div class="col-md-1 text-center">
					Usuário:	
				</div>
				<div class="col-md-2">
					<input class='ajustavel' type='text' name='txtUsuario' value='' style="color:black">	
				</div>
				<div class="col-md-1 text-center">
					Senha:
				</div>
				<div class="col-md-2">
					<input class='ajustavel' type='password' name='txtSenha' value='' style="color:black">	
				</div>
				<div class="col-md-1">
					<button class='btn-primary' type='submit' name='entrar' value='entrar'>Entrar</button>	
				</div>
			</div>
		</form>
		<br>

		<div class="row text-center" id="titulo">
			<div class="col-md-12">
				<h1>Deuses Nórdicos</h1>
			</div>
		</div>	

		<div class="row text-center">
			<img class="img-fluid" src="img/header.png">
		</div>



	</div>
</body>

</html>