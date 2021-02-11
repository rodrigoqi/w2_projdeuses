<?php

    class Conexao{

        public static $conexao;

        public static function getConexao(){
            $usuario = "root";
            $senha = ""; //vazio, root, 123
            $stringConexao = "mysql:host=localhost;port=3306;dbname=dbdeuses";

            if(!isset(self::$conexao)){
                try{
                    self::$conexao = new PDO($stringConexao, $usuario, $senha);
                } catch(PDOException $e){
                    $erro = $e->getCode();
                    //tipos de erro mais comum do PDO
                    //1044 - usuário
                    //1045 - senha
                    //2002 - host
                    //1049 - base
                    if($erro==1044){
                        echo "USUÁRIO NÃO IDENTIFICADO<br>";
                    }
                    if($erro==1045){
                        echo "SENHA INCORRETA<br>";
                    }
                    if($erro==2002){
                        echo "HOST NÃO ENCONTRADO<br>";
                    }
                    if($erro==1049){
                        echo "BASE DE DADOS NÃO ENCONTRADA<br>";
                    }

                }
            }

            return self::$conexao;
        }


    }


?>