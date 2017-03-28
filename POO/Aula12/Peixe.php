<?php

    require_once 'Animal.php';
    
    class Peixe extends Animal{
        private $corEscama;
        public function soltarBolhas() {
            echo "<p>Sou um peixe soltando bolhas</p>";
        }
        public function alimentar() {
            echo "<p>Comendo como um peixe</p>";
        }
        public function emitirSom() {
            echo "<p>Som de peixe</p>";
        }
        public function locomover() {
            echo "<p>Nadando como um peixe</p>";
        }
        function getCorEscama() {
            return $this->corEscama;
        }
        function setCorEscama($corEscama) {
            $this->corEscama = $corEscama;
        }
    }
