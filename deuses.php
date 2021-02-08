<?php
    require "model/deus.php";

    class Deuses{

        private $deuses = array();

        public function getDeuses(){
            return $this->deuses;
        }

        public function carregarDeusesPadrao(){
            
            $this->deuses[] = new Deus(
                1,
                "Thor",
                "Asgard",
                "trovão",
                "martelo",
                "Na mitologia nórdica, Thor era o deus do trovão e protetor dos agricultores. Controlava o clima e as colheitas, era também um dos deuses mais conhecidos devido aos seus longos cabelos ruivos e seu poderoso martelo chamado Mjolnir, com o qual protegia os mortais do mal.",
                60,
                "thor.jpeg"
            );
        
            $this->deuses[] = new Deus(
                2,
                "Loki",
                "Asgard",
                "magia",
                "adaga",
                "Loki é um deus da Mitologia Nórdica e filho dos gigantes Farbanti e Laufey; é irmão de Helblindi e Býleistr. Também é considerado o deus do fogo, da travessura e da trapaça. Loki também é relacionado à magia, pois ele pode assumir a forma que quiser.",
                42,
                "loki.jpg"
            );
        
            $this->deuses[] = new Deus(
                3,
                "Frigg",
                "Asgard",
                "magia",
                "bastão",
                "Mulher de Odin, a deusa da fertilidade veste um manto que parece com as nuvens – e que muda de cor de acordo com o seu humor. Representa a feminilidade, a fertilidade e era invocada pelas mulheres nos partos para a geração de crianças saudáveis e fortes.",
                52,
                "frigg.jpg"
            );
        
            $this->deuses[] = new Deus(
                4,
                "Tyr",
                "Asgard",
                "força",
                "espada",
                "Tyr é o Deus da guerra, o mais valente de todos os deuses na mitologia nórdica. Tyr é tão corajoso, que colocou sua mão nos maxilares do lobo feroz Fenrir, enquanto os outros deuses prenderam Fenrir a uma rocha.",
                63,
                "tyr.jpg"
            );
        
            $this->deuses[] = new Deus(
                5,
                "Balder",
                "Asgard",
                "imortalidade",
                "lança",
                "Outro filho de Odin e Frigg, é o mais belo, misericordioso e justo dos deuses. Espalha paz onde quer que ande. Por ser o deus mais amado e popular, tornou-se um dos alvos preferidos das intrigas de Loki.",
                41,
                "balder.jpg"
            );
        }

        public function adicionarDeus($novodeus){
            $this->deuses[] = $novodeus;
        }

}

?>