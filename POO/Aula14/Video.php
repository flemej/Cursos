<?php

    require_once 'AcoesVideo.php';

    class Video implements AcoesVideo{
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;
        
        public function __construct($titulo) {
            $this->setTitulo($titulo);
            $this->avaliacao=0;
            $this->setViews(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }
        function getTitulo() {
            return $this->titulo;
        }
        function getAvaliacao() {
            return $this->avaliacao;
        }
        function getViews() {
            return $this->views;
        }
        function getCurtidas() {
            return $this->curtidas;
        }
        function getReproduzindo() {
            return $this->reproduzindo;
        }
        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        function setAvaliacao($avaliacao) {
            $media = ($this->avaliacao + $avaliacao) / $this->views;
            $this->avaliacao = $media;
        }
        function setViews($views) {
            $this->views = $views;
        }
        function setCurtidas($curtidas) {
            $this->curtidas = $curtidas;
        }
        function setReproduzindo($reproduzindo) {
            $this->reproduzindo = $reproduzindo;
        }
        public function like() {
            $this->setCurtidas($this->getCurtidas()+1);
        }
        public function pause() {
            $this->setReproduzindo(false);
        }
        public function play() {
            $this->setReproduzindo(true);
        }
    }
?>