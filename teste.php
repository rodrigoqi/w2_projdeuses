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
        include_once "model/deus.php";
        include_once "controller/deusDAO.php";
        include_once "controller/conexao.php";
        include_once "view/deusview.php";

        //Criando um array de Deuses

        $deuses = array();
        $deuses[] = new Deus(
            1,
            "Thor",
            "Asgard",
            "trovão",
            "martelo",
            "Na mitologia nórdica, Thor era o deus do trovão e protetor dos agricultores. Controlava o clima e as colheitas, era também um dos deuses mais conhecidos devido aos seus longos cabelos ruivos e seu poderoso martelo chamado Mjolnir, com o qual protegia os mortais do mal.",
            60,
            "thor.jpeg"
        );
    
        $deuses[] = new Deus(
            2,
            "Loki",
            "Asgard",
            "magia",
            "adaga",
            "Loki é um deus da Mitologia Nórdica e filho dos gigantes Farbanti e Laufey; é irmão de Helblindi e Býleistr. Também é considerado o deus do fogo, da travessura e da trapaça. Loki também é relacionado à magia, pois ele pode assumir a forma que quiser.",
            42,
            "loki.jpg"
        );
    
        $deuses[] = new Deus(
            3,
            "Frigg",
            "Asgard",
            "magia",
            "bastão",
            "Mulher de Odin, a deusa da fertilidade veste um manto que parece com as nuvens – e que muda de cor de acordo com o seu humor. Representa a feminilidade, a fertilidade e era invocada pelas mulheres nos partos para a geração de crianças saudáveis e fortes.",
            52,
            "frigg.jpg"
        );

        //inserindo os deuses no banco de dados
        foreach($deuses as $deus){
            DeusDAO::inserir($deus);
        }

        //testando a atualização de informações
        $d1 = $deuses[0];
        $d1->setForca(70);
        $d1->setArma("Marreta");
        DeusDAO::atualizar($d1);

        //excluir um deus
        DeusDAO::excluir(3);

    ?>


    <div class="container">
    
        <div class="row">

            <?php
                $deuses = array();
                $deuses = DeusDAO::getDeuses("codigo", "", "", "asc");

                foreach($deuses as $deus){
                    DeusView::gerarCard($deus);
                }

            ?>

        </div>
    
    
    </div>


</body>

</html>

