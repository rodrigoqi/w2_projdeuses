<?php

    class DeusView{

        public static function gerarCard($deus){
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


    }

?>