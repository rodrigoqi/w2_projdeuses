<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--Tags básicas do head-->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deuses Nórdicos</title>
    <!--Link dos nossos arquivos CSS e JS padrão-->
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/deuses.css">
    <script src="../js/scripts.js"></script>
    <!--Link dos arquivos CSS e JS do Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>

<body>

    <?php
        include_once $_SERVER['DOCUMENT_ROOT'] . "/projdeuses/view/listadeusesview.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . "/projdeuses/controller/deusDAO.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . "/projdeuses/model/deus.php";    

        session_start();

		if(isset($_SESSION["logado"])){
			if($_SESSION["logado"]==true){
				//está tudo ok. Não faço nada
			} else{
				header("Location: ../login.php");
			}
		} else {
			header("Location: ../login.php");
		}
        if(!isset($_SESSION["emEdicao"])){
            $_SESSION["emEdicao"] = 0;
        }
        
        $campo = "";
        $operacao = "";
        $valor = "";
        $ordem = "";

        $deuses = null;

        if(isset($_GET["btnFiltro"])){
            if($_GET["btnFiltro"]=="filtrar"){
                $campo = $_GET["selTipoFiltro"];
                $operacao = $_GET["selOperacao"];
                $valor = $_GET["txtFiltro"];
                $ordem = $_GET["selOrdenacao"];

                $deuses = DeusDAO::getDeuses($campo, $operacao, $valor, $ordem);
            }
            if($_GET["btnFiltro"]=="desfazer"){
                $deuses = DeusDAO::getDeuses("codigo", "", "", "asc");    
            }
            if($_GET["btnFiltro"]=="inserir"){
                session_start();
                $_SESSION["emEdicao"] = 0;
                header("Location: cadastro.php");
            }
        } else {
            $deuses = DeusDAO::getDeuses("codigo", "", "", "asc");
        }
        

    ?>

    <div class="container">
        <br>
        <div class="row text-center">
            <div class="col-md-12">
                <img class="ajustavel" src="../img/header2.png">
            </div>
        </div>
        <br>
        <div class="row" id="titulo">
            <div class="col-md-12 text-center">
                <h1>Listagem de Deuses Nórdicos</h1>
            </div>
        </div>

        <form method="get" action="listagem.php">
            <div class="row text-center">
                <div class="col-md-1">
                    Filtro
                </div>
                <div class="col-md-2">
                    <input class="ajustavel" type="text" name="txtFiltro" id="txtFiltro" value="">
                </div>
                <div class="col-md-2">
                    <select class="ajustavel" name="selTipoFiltro" id="selTipoFiltro">
                        <option value="arma">Arma</option>                     
                        <option value="elemento">Elemento</option>
                        <option value="forca">Forca</option>
                        <option value="nome">Nome</option>
                        <option value="reino">Reino</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="ajustavel" name="selOperacao" id="selOperacao">
                        <option value="=">Igual</option>
                        <option value="<>">Diferente</option>
                        <option value=">">Maior</option>
                        <option value=">=">Maior ou igual</option>
                        <option value="<">Menor</option>
                        <option value="<=">Menor ou igual</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="ajustavel" name="selOrdenacao" id="selOrdenacao">
                        <option value="asc">Crescente</option>
                        <option value="desc">Decrescente</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <input class="btn btn-primary" type="submit" name="btnFiltro" value="filtrar" style="padding:0px!important;">
                </div>
                <div class="col-md-1">
                    <input class="btn btn-danger" type="submit" name="btnFiltro" value="desfazer" style="padding:0px!important;">
                </div>
                <div class="col-md-1">
                    <input class="btn btn-success" type="submit" name="btnFiltro" value="inserir" style="padding:0px!important;">
                </div>
                
            </div>

            <br><br>
            
        </form>

        <?php
            
            ListaDeusesView::geraLista($deuses);

            echo "
                <script>
                    $('#txtFiltro').val('$valor');
                    $('#selTipoFiltro').val('$campo');
                    $('#selOperacao').val('$operacao');
                    $('#selOrdenacao').val('$ordem');
                </script>
            ";

        ?>


    </div>
</body>

</html>