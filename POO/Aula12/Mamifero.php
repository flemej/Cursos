<?php

    require_once 'Animal.php';
    
    class Mamifero extends Animal{
        private $corPelo;
        public function alimentar() {
            echo "<p>Comendo como um mamífero</p>";
        }
        public function emitirSom() {
            echo "<p>Som de mamífero</p>";
        }
        public function locomover() {
            echo "<p>Correndo como um mamífero</p>";
        }
        function getCorPelo() {
            return $this->corPelo;
        }
        function setCorPelo($corPelo) {
            $this->corPelo = $corPelo;
        }
    }
