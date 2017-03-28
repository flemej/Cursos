<?php

    require_once 'Pessoa.php';

    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;
        public function __construct($nome, $idade, $sexo) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setExperiencia(0);
        }
        protected function ganharExperiencia($n){
            $this->setExperiencia($this->getExperiencia()+$n);
        }
        function getNome() {
            return $this->nome;
        }
        function getIdade() {
            return $this->idade;
        }
        function getSexo() {
            return $this->sexo;
        }
        function getExperiencia() {
            return $this->experiencia;
        }
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setIdade($idade) {
            $this->idade = $idade;
        }
        function setSexo($sexo) {
            $this->sexo = $sexo;
        }
        function setExperiencia($experiencia) {
            $this->experiencia = $experiencia;
        }
    }
?>
