<?php

    require_once 'Lutador.php';

    class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $lutaAprovada;
        
        private function apresentar() {
            echo "<p>--- A P R E S E N T A Ç Ã O ---</p>";
            echo "<p>         Nome: {$this->getNome()}</p>";            
            echo "<p>       Origem: {$this->getNacionalidade()}</p>";
            echo "<p>        Idade: {$this->getIdade()} anos</p>";
            echo "<p>       Altura: {$this->getAltura()} metros</p>";
            echo "<p>         Peso: {$this->getPeso()} quilos</p>";
            echo "<p>    Categoria: {$this->getCategoria()}</p>";
            echo "<p>     Vitorias: {$this->getVitorias()}</p>";
            echo "<p>      Empates: {$this->getEmpates()}</p>";
            echo "<p>     Derrotas: {$this->getDerrotas()}</p>";
        }
        public function marcarLuta($ld, $la) {
            if (($ld->getCategoria() === $la->getCategoria()) && ($ld != $la)){
                $this->setLutaAprovada(true);
                $this->setDesafiado($ld);
                $this->setDesafiante($la);
            }
            else {
                $this->setLutaAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }
        public function lutar() {
            if ($this->getLutaAprovada()) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0:
                        echo "<p>A luta entre {$this->desafiado->getNome()} e {$this->desafiante->getNome()} deu em empate!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1:
                        echo "<p> O lutador {$this->desafiado->getNome()} venceu a luta";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2:
                        echo "<p> O lutador {$this->desafiante->getNome()} venceu a luta";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                }        
                $this->desafiado->status();
                $this->desafiante->status();

            }
            else {
                echo "<p>Luta não pode acontecer</p>";
            }
        }
        public function getDesafiado() {
            return $this->desafiado;
        }
        public function getDesafiante() {
            return $this->desafiante;
        }
        public function getRounds() {
            return $this->rounds;
        }
        public function getLutaAprovada() {
            return $this->lutaAprovada;
        }
        public function setDesafiado($desafiado) {
            $this->desafiado = $desafiado;
        }
        public function setDesafiante($desafiante) {
            $this->desafiante = $desafiante;
        }
        public function setRounds($rounds) {
            $this->rounds = $rounds;
        }
        public function setLutaAprovada($lutaAprovada) {
            $this->lutaAprovada = $lutaAprovada;
        }
    }
