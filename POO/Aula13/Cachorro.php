<?php
//exemplificacao de como seria feita sobrecarga de metodos, 
//já que em php não é possível fazer 
//o exemplo consiste em criar metodos com nomes diferentes
    require_once 'Lobo.php';

    class Cachorro extends Lobo {
        public function emitirSom() {
            echo "<p>Au au au au au</p>";
        }
        public function reagirFrase ($frase) {
            echo "<p>$frase</p>";
        }
        public function reagirHora ($hora) {
            if ($hora>5 && $hora < 13) {
                echo "<p>Bom dia, humano</p>";
            }
            elseif ($hora >14 && $hora <17) {
                echo "<p>Boa tarde, humano!</p>";
            }
            elseif ($hora>17) {
                echo "<p>Boa noite, humano!</p>";
            } 
        }
        public function reagirDono($dono) {
            if ($dono) {
                echo "<p>Cara bacana esse meu dono....</p>";
            }
            else {
                echo "<p>Mano, quem é você?</p>";
            }
        }
    }
