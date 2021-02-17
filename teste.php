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
        include_once $_SERVER['DOCUMENT_ROOT'] . "/projdeuses/model/deus.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . "/projdeuses/controller/deusDAO.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . "/projdeuses/controller/conexao.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . "/projdeuses/view/deusview.php";

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

        $deuses[] = new Deus(
            4,
            "Tyr",
            "Asgard",
            "força",
            "espada",
            "Tyr é o Deus da guerra, o mais valente de todos os deuses na mitologia nórdica. Tyr é tão corajoso, que colocou sua mão nos maxilares do lobo feroz Fenrir, enquanto os outros deuses prenderam Fenrir a uma rocha.",
            63,
            "tyr.jpg"
        );
    
        $deuses[] = new Deus(
            5,
            "Balder",
            "Asgard",
            "imortalidade",
            "lança",
            "Outro filho de Odin e Frigg, é o mais belo, misericordioso e justo dos deuses. Espalha paz onde quer que ande. Por ser o deus mais amado e popular, tornou-se um dos alvos preferidos das intrigas de Loki.",
            41,
            "balder.jpg"
        );
    
        $deuses[] = new Deus(
            6,
            "Hel",
            "Niflheim",
            "gelo",
            "colar",
            "Filha de Loki com uma das gigantes do gelo, Hel é a Deusa superior de Niflheim, a Terra dos Mortos. Descrita como uma figura sempre sombria, é vida da cintura para cima e morta da cintura para baixo.",
            45,
            "hel.jpg"
        );

        $deuses[] = new Deus(
            7,
            "Freya",
            "Vanir",
            "magia",
            "espada",
            "Filha de Skade (o deus do mar) e irmã de Frey, ela é a deusa do amor, beleza, sensualidade e fertilidade. Também considerada deusa da magia e da riqueza, as suas lágrimas transformavam-se em ouro.",
            45,
            "freya.jpg"
        );

        $deuses[] = new Deus(
            8,
            "Odin",
            "Asgard",
            "água",
            "lança",
            "O deus da guerra, da poesia e da sabedoria. Como pai dos deuses, tinha o poder de vigiar todos os nove reinos com seu único olho (que brilhava tanto quanto o sol), além de ser um amante dos vinhos.",
            1000,
            "odin.jpg"
        );

        $deuses[] = new Deus(
            9,
            "Mimir",
            "Jotunheim",
            "água",
            "inteligência",
            "Este gigante é conhecido por sua sabedoria. Durante a guerra entre Asir e Vanir, Mimir foi decapitado. Para manter sua sabedoria, Odin manteve sua cabeça com magia para que pudesse continuar a aconselhá-lo.",
            38,
            "mimir.jpg"
        );

        $deuses[] = new Deus(
            10,
            "Vali",
            "Asgard",
            "luz",
            "flexa",
            "Vali é o filho mais novo de Odin e da gigante Grid, sendo concebido com o propósito de matar Höðr, vingando a morte de Balder. Representa a luz do dia, que se torna mais forte com o fim do inverno.",
            54,
            "vali.jpg"
        );

        $deuses[] = new Deus(
            11,
            "Vali",
            "Asgard",
            "luz",
            "flexa",
            "Vali é o filho mais novo de Odin e da gigante Grid, sendo concebido com o propósito de matar Höðr, vingando a morte de Balder. Representa a luz do dia, que se torna mais forte com o fim do inverno.",
            54,
            "vali.jpg"
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
        DeusDAO::excluir(11);

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

