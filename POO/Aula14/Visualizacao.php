<?php

    require_once 'Video.php';
    require_once 'Gafanhoto.php';

    class Visualizacao {
        private $espectador;
        private $filme;
        public function __construct($espectador, $filme) {
            $this->setEspectador($espectador);
            $this->setFilme($filme);
            $this->filme->setViews($this->filme->getViews()+1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }
        public function avaliar() {
            $this->filme->setAvaliacao(5);
        }
        public function avaliarNota($nota) {
            $this->filme->setAvaliacao($nota);
        }
        public function avaliarPorc($porc) {
           
            if ($porc<=30) {
                $this->filme->setAvaliacao(30);
            }
            elseif ($porc<=50) {
                $this->filme->setAvaliacao(50);
            }
            elseif ($porc <=80) {
                $this->filme->setAvaliacao(80);
            }
            else {
                $this->filme->setAvaliacao(100);
            }
        }
        public function getEspectador() {
            return $this->espectador;
        }
        public function getFilme() {
            return $this->filme;
        }
        public function setEspectador($espectador) {
            $this->espectador = $espectador;
        }
        public function setFilme($filme) {
            $this->filme = $filme;
        }
    }
?>