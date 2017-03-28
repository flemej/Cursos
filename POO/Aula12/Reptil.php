<?php
    require_once 'Animal.php';
    class Reptil extends Animal{
        private $corEscama;
        public function alimentar() {
            echo "<p>Comendo como um réptil</p>";
        }
        public function emitirSom() {
            echo "<p>Som de réptil</p>";
        }
        public function locomover() {
            echo "<p>rastejando como um réptil</p>";
        }
        function getCorEscama() {
            return $this->corEscama;
        }
        function setCorEscama($corEscama) {
            $this->corEscama = $corEscama;
        }
    }
