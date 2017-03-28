<?php

    require_once 'Animal.php';

    class Ave extends Animal{
        private $corPena;
        public function fazerNinho() {
            echo "<p>Sou um pássaro fazendo um ninho</p>";
        }
        public function alimentar() {
            echo "<br>Comendo como um pássaro</br>";
        }
        public function emitirSom() {
            echo "<br>Som de pássaro</br>";
        }
        public function locomover() {
            echo "<br>voando como um pássaro</br>";
        }
        function getCorPena() {
            return $this->corPena;
        }
        function setCorPena($corPena) {
            $this->corPena = $corPena;
        }
    }
