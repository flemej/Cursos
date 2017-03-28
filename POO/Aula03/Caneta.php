<?php


    class Caneta {

        //atributos
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        //metodos
        public function rabiscar (){

            if ($this->tampada==true) { 

                echo "Erro! Não posso rabiscar";
            }
            else {

                echo "<p>Estou rabiscando</p>";
            }

        }    

        public function tampar () {
            
            $this->tampada=true; // Estado
        }

        public function destampar () {
            
            $this->tampada=false; // Estado
        }

    }
    
?>

