<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--Tags básicas do head-->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Deuses Nórdicos</title>
	<!--Link dos nossos arquivos CSS e JS padrão-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/deuses.css">
	<script src="js/scripts.js"></script>
	<!--Link dos arquivos CSS e JS do Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>
	<?php
		include_once "controller/conexao.php";
		Conexao::getConexao();

		session_start();
		if(isset($_SESSION["logado"])){
			if($_SESSION["logado"]==true){
				//está tudo ok. Não faço nada
			} else{
				header("Location: login.php");
			}
		} else {
			header("Location: login.php");
		}

	?>


	<div class="container">
		<br>
		<div class="row text-center">
			<div class="col-md-12">
				<img class="ajustavel" src="img/header.png">
			</div>
		</div>
		<br>
		<div class="row" id="titulo">
			<div class="col-md-12 text-center">
				<h1>Deuses Nórdicos</h1>
			</div>
		</div>

		<div class="row">

			<?php

				include_once "controller/deusDAO.php";
				include_once "view/deusview.php";

				$deuses = DeusDAO::getDeuses("codigo", "", "", "asc");

				foreach($deuses as $deus){
					
					DeusView::gerarCard($deus);

				}

			?>

		</div>
		
	</div>
</body>

</html>