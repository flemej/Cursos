<?php

    require_once 'Animal.php';
    
    class Mamifero extends Animal{
        protected $corPelo;
        public function emitirSom() {
         echo "<p>Som de mamífero</p>";
        }
        function getCorPelo() {
            return $this->corPelo;
        }
        function setCorPelo($corPelo) {
            $this->corPelo = $corPelo;
        }
    }

