<?php
    //MÉTODOS MÍNIMOS AO TRABALHAR COM BANCO DE DADOS
    //inserir (método único) [ok]
    //excluir (método único ou com alteração de identificação) [ok]
    //alterar (método único) [ok]
    //pesquisar (múltiplos métodos com critérios diferentes)

    include_once "controller/conexao.php";

    class DeusDAO{

        public static function inserir($deus){
            $con = Conexao::getConexao();
            $sql = $con->prepare("insert into deuses values (null,?,?,?,?,?,?,?)");
            
            $nome = $deus->getNome();
            $reino = $deus->getReino();
            $elemento = $deus->getElemento();
            $arma = $deus->getArma();
            $descricao = $deus->getDescricao();
            $forca = $deus->getForca();
            $foto = $deus->getFoto();

            $sql->bindParam(1, $nome);
            $sql->bindParam(2, $reino);
            $sql->bindParam(3, $elemento);
            $sql->bindParam(4, $arma);
            $sql->bindParam(5, $descricao);
            $sql->bindParam(6, $forca);
            $sql->bindParam(7, $foto);

            $sql->execute();

        }

        public static function excluir($deus){
            $con = Conexao::getConexao();

            $sql = null;

            //quando recebe o código do Deus a ser excluído
            if(is_numeric($deus)){
                $sql = $con->prepare("delete from deuses where codigo = ?");
                $sql->bindParam(1, $deus);
            //quando recebe o nome do Deus a ser excluído
            } else if(is_string($deus)){
                $sql = $con->prepare("delete from deuses where nome = ?");
                $sql->bindParam(1, $deus);
            //quando recebe o Deus a ser excluído (objeto)
            } else {
                $sql = $con->prepare("delete from deuses where codigo = ?");
                $codigo = $deus->getCodigo();
                $sql->bindParam(1, $codigo);
            }
            
            $sql->execute();
            
        }

        public static function atualizar($deus){
            $con = Conexao::getConexao();

            $codigo = $deus->getCodigo();
            $nome = $deus->getNome();
            $reino = $deus->getReino();
            $elemento = $deus->getElemento();
            $arma = $deus->getArma();
            $descricao = $deus->getDescricao();
            $forca = $deus->getForca();
            $foto = $deus->getFoto();

            $sql = $con->prepare("update deuses set nome=?, reino=?, elemento=?,
                    arma=?, descricao=?, forca=?, foto=? where codigo=?");
            
            $sql->bindParam(1, $nome);
            $sql->bindParam(2, $reino);
            $sql->bindParam(3, $elemento);
            $sql->bindParam(4, $arma);
            $sql->bindParam(5, $descricao);
            $sql->bindParam(6, $forca);
            $sql->bindParam(7, $foto);
            $sql->bindParam(8, $codigo);

            $sql->execute();

        }


    }

?>