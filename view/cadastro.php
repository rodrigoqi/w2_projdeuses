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

        include_once $_SERVER['DOCUMENT_ROOT'] . "/projdeuses/model/deus.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . "/projdeuses/controller/deusDAO.php";
        include_once $_SERVER['DOCUMENT_ROOT'] . "/projdeuses/auxiliares/imagem.php";

        session_start();
        if(!isset($_SESSION["emEdicao"])){
            $_SESSION["emEdicao"] = 0;
        }

        $codigo = "";
        $nome = "";
        $reino = "";
        $elemento = "";
        $arma = "";
        $descricao = "";
        $forca = "";
        $foto = "semfoto.jpg";
        
        $deus = null;

        if(isset($_POST["selDeus"])){
            $_SESSION["emEdicao"] = $_POST["selDeus"];
        }

        if($_SESSION["emEdicao"] != 0){
            $codigo = $_SESSION["emEdicao"];
            $deus = DeusDAO::getDeus($codigo);
            $nome = $deus->getNome();
            $reino = $deus->getReino();
            $elemento = $deus->getElemento();
            $arma = $deus->getArma();
            $descricao = $deus->getDescricao();
            $forca = $deus->getForca();
            $foto = $deus->getFoto();

        } 
        
        if (isset($_POST["botaoAcao"])) {
            if($_POST["botaoAcao"] == "Gravar"){
                $nome = $_POST["nome"];
                $reino = $_POST["reino"];
                $elemento = $_POST["elemento"];
                $arma = $_POST["arma"];
                $descricao = $_POST["descricao"];
                $forca = $_POST["forca"];
                $arquivo = $_FILES["fileFoto"];
                if(!empty($_FILES["fileFoto"]["name"])){
                    $foto = Imagem::uploadImagem($arquivo, 2000, 2000, 5000, "../img/");
                }

                $deus = new Deus(
                    $codigo,
                    $nome,
                    $reino,
                    $elemento,
                    $arma,
                    $descricao,
                    $forca,
                    $foto
                );

                if($_SESSION["emEdicao"] != 0){
                    DeusDAO::atualizar($deus);
                } else {
                    DeusDAO::inserir($deus);
                    $deusAux = DeusDAO::getDeus($nome);
                    $_SESSION["emEdicao"] = $deusAux->getCodigo();
                }
               

            } else if($_POST["botaoAcao"] == "Novo") {
                $codigo = "";
                $nome = "";
                $reino = "";
                $elemento = "";
                $arma = "";
                $descricao = "";
                $forca = "";
                $foto = "semfoto.jpg";
                $_SESSION["emEdicao"] = 0;

            } else if($_POST["botaoAcao"] == "Excluir") {
                
                DeusDAO::excluir($_SESSION["emEdicao"]);
                $codigo = "";
                $nome = "";
                $reino = "";
                $elemento = "";
                $arma = "";
                $descricao = "";
                $forca = "";
                $foto = "semfoto.jpg";
                $_SESSION["emEdicao"] = 0;

            } else if($_POST["botaoAcao"] == "Cancelar") {
                header("Location: listagem.php");
                $_SESSION["emEdicao"] = 0;
            }
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
                <h1>Cadastro de Deuses Nórdicos</h1>
            </div>
        </div>

        <form method="post" action="cadastro.php" enctype="multipart/form-data">

            <div class="row text-center">
                <div class="col-md-3">
                    <input type="submit" name="botaoAcao" value="Gravar" class="btn btn-success" />
                </div>
                <div class="col-md-3">
                    <input type="submit" name="botaoAcao" value="Novo" class="btn btn-primary" />
                </div>
                <div class="col-md-3">
                    <input type="submit" name="botaoAcao" value="Excluir" class="btn btn-danger" />
                </div>
                <div class="col-md-3">
                    <input type="submit" name="botaoAcao" value="Cancelar" class="btn btn-warning" />
                </div>
            </div>

            <br><br>
            <div class="row">

                <div class="col-md-6">
                        <img src="../img/<?php echo $foto; ?>" style="width:100%; height:90%;">
                        <input type="file" name="fileFoto" style="background-color: #AAAAAA!important;">
                </div>

                <div class="col-md-6" style="color: #BBBBBB; ">
                    <div class="row">
                        <div class="col-md-6">
                            Nome<br>
                            <input type="text" name="nome" value="<?php echo $nome; ?>" >
                        </div>
                        <div class="col-md-6">
                            Reino<br>
                            <input type="text" name="reino" value="<?php echo $reino; ?>" >
                        </div>
                        <div class="col-md-5">
                            Elemento<br>
                            <input type="text" name="elemento" value="<?php echo $elemento; ?>" >
                        </div>
                        <div class="col-md-5">
                            Arma<br>
                            <input type="text" name="arma" value="<?php echo $arma; ?>" >
                        </div>
                        <div class="col-md-2">
                            Força<br>
                            <input type="text" name="forca" value="<?php echo $forca; ?>" >
                        </div>
                        <div class="col-md-12">
                            Descrição<br>
                            <textarea name="descricao" rows="10" wrap="hard" style="width: 100%;"><?php echo $descricao; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</body>

</html>