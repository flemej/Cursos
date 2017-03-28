<?php

    require_once 'Mamifero.php';

    class Canguru extends Mamifero{
        public function usarBolsa() {
            echo "<p>Sou um canguru usando a minha bolsa</p>";
        }
        public function locomover() {
            echo "<p>Pulando como um canguru</p>";
        }
    }
