<?php 

	class Ventilador{

		// Atributos
		var $nome;
		var $marca;
		var $cor;
		var $altura;
		var $rotacao;
		var $ligado;

		// Métodos
		function ligar(){

			if($this->ligado == false){

				$this->ligado = true;
				$this->rotacao = 1;

				echo "<p> Ventilador ligado com sucesso! </p>";
			}else{

				echo "<p> ERRO! O ventilador já está ligado... </p>";
			}
		}

		function velocidade(){

			if ($this->ligado == true){

				if($this->rotacao == 4){

					echo "<p> Não é possível aumentar mais a sua velocidade! </p>";
					echo "<p> Limite máximo alcansado... </p>";
				}else{

					$this->rotacao++;
				}
			}else{

				echo "<p> É preciso ligar o ventilador para aumentar a sua velocidade </p>";
			}
		}

		function desligar(){

			if($this->ligado == false){

				echo "<p> O ventilador já está desligado... </p>";
			}else{

				$this->ligado  = false;
				$this->rotacao = 0;

				echo "<p> Ventilador desligado com sucesso! </p>";
			}
		}
	}
 ?>