<?php


    class Caneta {

        //atributos
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        //var $tampada;

        //metodos
        function rabiscar (){

            if ($this->tampada==true) { 

                echo "Erro! Não posso rabiscar";
            }
            else {

                echo "<p>Estou rabiscando</p>";
            }

        }    

        function tampar () {
            
            $this->tampada=true; // Estado
        }

        function destampar () {
            
            $this->tampada=false; // Estado
        }

    }
    
?>

