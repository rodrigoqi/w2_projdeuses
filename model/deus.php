<?php

    class Deus{
        //PRIMEIRO: ATRIBUTOS (CARACTERÍSTICAS = VARIÁVEIS)
        private $codigo;
        private $nome;
        private $reino;
        private $elemento;
        private $arma;
        private $descricao;
        private $forca;
        private $foto;

        //SEGUNDO: MÉTODOS (AÇÕES = FUNCTIONS)

        //CONSTRUTOR: método que diz como um novo 
        //objeto da classe deve ser construído
        public function __construct($codigo, $nome, $reino, $elemento, 
                                        $arma, $descricao, $forca, $foto){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->reino = $reino;
            $this->elemento = $elemento;
            $this->arma = $arma;
            $this->descricao = $descricao;
            $this->forca = $forca;
            $this->foto = $foto;
        }

        //GETTERS E SETTERS
        //get: método que me devolve (retorna) um valor/informação
        //set: método que alterar (modifica) um valor/informação

        //GETTERS
        public function getCodigo(){
            return $this->codigo;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getReino(){
            return $this->reino;
        }

        public function getElemento(){
            return $this->elemento;
        }

        public function getArma(){
            return $this->arma;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function getForca(){
            return $this->forca;
        }

        public function getFoto(){
            return $this->foto;
        }

        //SET
        public function setCodigo($novoCodigo){
            $this->codigo = $novoCodigo;
        }

        public function setNome($novoNome){
            $this->nome = $novoNome;
        }

        public function setReino($novoReino){
            $this->reino = $novoReino;
        }

        public function setElemento($novoElemento){
            $this->elemento = $novoElemento;
        }

        public function setArma($novaArma){
            $this->arma = $novaArma;
        }

        public function setDescricao($novaDescricao){
            $this->descricao = $novaDescricao;
        }

        public function setForca($novaForca){
            $this->forca = $novaForca;
        }

        public function setFoto($novaFoto){
            $this->foto = $novaFoto;
        }

        //TOSTRING: devolve uma string (texto) com as informações da classe
        public function toString(){
            $texto = "";
            $texto = $texto . "<strong>Código: </strong>" . $this->codigo . "<br>";
            $texto = $texto . "<strong>Nome: </strong>" . $this->nome . "<br>";
            $texto = $texto . "<strong>Reino: </strong>" . $this->reino . "<br>";
            $texto = $texto . "<strong>Elemento: </strong>" . $this->elemento . "<br>";
            $texto = $texto . "<strong>Arma: </strong>" . $this->arma . "<br>";
            $texto = $texto . "<strong>Força: </strong>" . $this->forca . "<br>";
            $texto = $texto . "<strong>Foto: </strong>" . $this->foto . "<br>";
            $texto = $texto . "<strong>Descrição: </strong>" . $this->descricao;

            return $texto;
        }

    }

    




?>