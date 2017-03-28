<?php

    require_once 'Controlador.php';
    
    class ControleRemoto implements Controlador{
        
        //Atributos
        private $volume; 
        protected $volumeBkp;
        private $ligado;
        private $tocando;
        
        //Metodos especiais 
        public function __construct() {
            $this->setVolume(50);
            $this->setVolumeBkp(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }

        private function getVolume() {
            return $this->volume;
        }

        private function getVolumeBkp() {
            return $this->volumeBkp;
        }

        private function getLigado() {
            return $this->ligado;
        }

        private function getTocando() {
            return $this->tocando;
        }

        private function setVolume($volume) {
            $this->volume = $volume;
        }
        
        private function setVolumeBkp($volumeBkp) {
            $this->volumeBkp = $volumeBkp;
        }

        private function setLigado($ligado) {
            $this->ligado = $ligado;
        }

        private function setTocando($tocando) {
            $this->tocando = $tocando;
        }

        public function ligar() {
            if (!$this->getLigado()) {
                echo "<p>ligando receptor...</p>";
                $this->setLigado(true);
            }
            else {
                echo "<p>Receptor já está ligado</p>";
            }
        }

        public function desligar() {
            if ($this->getLigado()) {
                $this->setLigado(false);
            } 
            else {
                echo "<p>Receptor já está desligado!</p>";
            }
        }
      
        public function abrirMenu() {
            echo "<p>----- M E N U -----</p>";
            echo "<p>Está ligado? ".($this->getLigado()?"Sim":"Não")."</p>";
            echo "<p>Está tocando? ".($this->getTocando()?"Sim":"Não")."</p>";
            echo "<p>Volume: ".$this->getVolume();
            for ($i=1;$i<=$this->getVolume();$i+=10) {
                echo "|";
            }
            echo "</p>";
            echo "<p>-------------------</p>";            
        }

        public function fecharMenu() {
            echo "<br>Fechando menu...";
        }

        public function maisVolume() {
            if ($this->getLigado()) {
                if ($this->getVolume()<=90) {
                    $this->setVolume($this->getVolume()+10);
                    echo "<p>Aumentando Volume: ".$this->getVolume();
                    for ($i=1 ; $i<=$this->getVolume() ; $i+=10) {
                        echo "|";
                    }
                    echo "</p>";
                }
                else {
                    echo "<p>Volume Máximo!</p>";
                }
            }
        }

        public function menosVolume() {
            if ($this->getLigado()) {
                if ( $this->getVolume()>=10) {
                $this->setVolume($this->getVolume()-10);
                echo "<p>Diminuindo Volume: ".$this->getVolume();
                for ($i=$this->getVolume(); $i>=1;$i-=10) {
                    echo "|";
                }
                echo "</p>"; 
                }
                else {
                    echo "<p>Volume Mínimo!</p>";
                }
            }
        }

        public function ligarMudo() {
            if ($this->getLigado() && $this->getVolume()>=0) {
                echo "<p>Volume mudo</p>";
                $this->setVolumeBkp($this->getVolume());
                $this->setVolume(0);
            }
        }

        public function desligarMudo() {
            if ($this->getLigado() && $this->getVolume()==0) {
                $this->setVolume($this->getVolumeBkp());
                echo "<p>Volume: ".$this->getVolume();
                for ($i=1;$i<=$this->getVolume();$i+=10) {
                    echo "|";
                }
                echo "</p>";
            }
        }

        public function play() {
            if ($this->getLigado()) {
                if (!$this->getTocando()) {
                    $this->setTocando(true);
                    echo "<p>Iniciando midia</p>";
                }
                else {
                    echo "<p>Já está tocando</p>";
                }
            }
        }

        public function pause() {
            if ($this->getLigado()) {                
                if ($this->getTocando()) {
                   $this->setTocando(false);
                   echo "<p>Pausando...</p>";
                }
                else {
                    echo "<p>Já está pausado!</p>";
                }
            }
        }
}
