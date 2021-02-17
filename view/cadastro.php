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

        <form method="get" action="cadastro.php" enctype="multipart/form-data">

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
                        <img src="../img/semfoto.jpg" style="width:100%; height:90%;">
                        <input type="file" name="fileFoto" style="background-color: #AAAAAA!important;">
                </div>

                <div class="col-md-6" style="color: #BBBBBB; ">
                    <div class="row">
                        <div class="col-md-6">
                            Nome<br>
                            <input type="text" name="nome" value="" >
                        </div>
                        <div class="col-md-6">
                            Reino<br>
                            <input type="text" name="reino" value="" >
                        </div>
                        <div class="col-md-5">
                            Elemento<br>
                            <input type="text" name="elemento" value="" >
                        </div>
                        <div class="col-md-5">
                            Arma<br>
                            <input type="text" name="arma" value="" >
                        </div>
                        <div class="col-md-2">
                            Força<br>
                            <input type="text" name="forca" value="" >
                        </div>
                        <div class="col-md-12">
                            Descrição<br>
                            <textarea name="descricao" rows="10" wrap="hard" style="width: 100%;"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</body>

</html>