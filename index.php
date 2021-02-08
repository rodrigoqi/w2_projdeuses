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
				require "deuses.php";

				$deuses = new Deuses();
				$deuses->carregarDeusesPadrao();

				//$deuses->adicionarDeus($d1);

				foreach($deuses->getDeuses() as $deus){
					$codigo = $deus->getCodigo();
					$nome = $deus->getNome();
					$reino = $deus->getReino();
					$elemento = $deus->getElemento();
					$arma = $deus->getArma();
					$descricao = $deus->getDescricao();
					$forca = $deus->getForca();
					$foto = $deus->getFoto();

					echo "
						<div class='col-md-4 text-center cardgod'>
						<img src='img/$foto'>
						<h2>$nome</h2>
						<p><strong>Reino: $reino</strong></p>
						<p>$descricao</p>
						<hr>
						<p>
						<strong>Elemento: </strong>$elemento<br>
						<strong>Arma: </strong>$arma<br>
						<strong>Força: </strong>$forca
						</p>
						</div>
					";


				}



			?>



			
		</div>
		

	</div>
</body>

</html>