<?php

    Class ListaDeusesView{

        public static function geraLista($lista){
            echo "
                <form action='cadastro.php' method='get'>
                    <div class='row' style='background-color: #555555; color: #FFFFFF; '>
                        <div class='col-md-1'>

                        </div>
                        <div class='col-md-1 text-center'>
                            Código
                        </div>
                        <div class='col-md-3'>
                            Nome
                        </div>
                        <div class='col-md-2'>
                            Reino
                        </div>
                        <div class='col-md-1'>
                            Elemento
                        </div>
                        <div class='col-md-1'>
                            Arma
                        </div>
                        <div class='col-md-1'>
                            Força
                        </div>
                        <div class='col-md-1'>
                            
                        </div>
                        <div class='col-md-1'>
                            
                        </div>
                    </div>
                
            ";

            $cont = 0;

            foreach($lista as $deus){
                $cont++;

                $cor= "#BBBBBB";
                if($cont%2 == 0){
                    $cor = "#DDDDDD";
                }

                $codigo = $deus->getCodigo();
                $nome = $deus->getNome();
                $reino = $deus->getReino();
                $elemento = $deus->getElemento();
                $arma = $deus->getArma();
                $forca = $deus->getForca();
                $foto = $deus->getFoto();

                echo "
                    <div class='row' style='background-color: $cor; border: 1px solid #AAAAAA; font-size: 0.9em;'>
                        <div class='col-md-1' style='height: 50px; padding: 0!important; '>
                            <img src='../img/$foto' style='height: 100%; width: 100%;'>
                        </div>
                        <div class='col-md-1 text-center' style='display:flex; align-items:center; justify-content:center;'>
                            $codigo
                        </div>
                        <div class='col-md-3' style='display:flex; align-items:center;'>
                            $nome
                        </div>
                        <div class='col-md-2' style='display:flex; align-items:center;'>
                            $reino
                        </div>
                        <div class='col-md-1' style='display:flex; align-items:center;'>
                            $elemento
                        </div>
                        <div class='col-md-1' style='display:flex; align-items:center;'>
                            $arma
                        </div>
                        <div class='col-md-1' style='display:flex; align-items:center;'>
                            $forca
                        </div>
                        <div class='col-md-1'>
                            <button class='btn' type='submit' name='delDeus' value=$codigo style='height:100%; background-color:transparent;'>
                                <img src='../img/delete.png' style='height:50%; width:50%;'>
                            </button>
                        </div>
                        <div class='col-md-1'>
                            <button class='btn' type='submit' name='selDeus' value=$codigo style='height:100%; background-color:transparent;'>
                                <img src='../img/edit.png' style='height:50%; width:50%;'>
                            </button>
                        </div>
                    </div>
                ";

            }

            echo "</form>";

        }

    }

?>