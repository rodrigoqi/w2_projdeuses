<?php

    class Usuario{
        //PRIMEIRO: ATRIBUTOS (CARACTERÍSTICAS = VARIÁVEIS)
        private $codigo;
        private $usuario;
        private $senha;

        //SEGUNDO: MÉTODOS (AÇÕES = FUNCTIONS)

        //CONSTRUTOR: método que diz como um novo 
        //objeto da classe deve ser construído
        public function __construct($codigo, $usuario, $senha){
            $this->codigo = $codigo;
            $this->usuario = $usuario;
            $this->senha = $senha;
        }

        //GETTERS E SETTERS
        //get: método que me devolve (retorna) um valor/informação
        //set: método que alterar (modifica) um valor/informação

        //GETTERS
        public function getCodigo(){
            return $this->codigo;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function getSenha(){
            return $this->senha;
        }

        //SET
        public function setCodigo($novoCodigo){
            $this->codigo = $novoCodigo;
        }

        public function setUsuario($novoUsuario){
            $this->usuario = $novoUsuario;
        }

        public function setSenha($novaSenha){
            $this->senha = $novaSenha;
        }

        //TOSTRING: devolve uma string (texto) com as informações da classe
        public function toString(){
            $texto = "";
            $texto = $texto . "<strong>Código: </strong>" . $this->codigo . "<br>";
            $texto = $texto . "<strong>Usuário: </strong>" . $this->usuario . "<br>";
            $texto = $texto . "<strong>Senha: </strong>" . $this->senha . "<br>";

            return $texto;
        }

    }

?>