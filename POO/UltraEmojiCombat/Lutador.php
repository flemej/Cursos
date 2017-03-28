<?php

    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        function apresentar() {
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
        function status() {
            echo "<p>S T A T U S ---> ";
            echo "{$this->getNome()}, {$this->getPeso()} quilos ({$this->getCategoria()}), ";
            echo "{$this->getVitorias()} vitórias, {$this->getEmpates()} empates e {$this->getDerrotas()} derrotas</p>";
        }
        function ganharLuta() {
            $this->setVitorias($this->getVitorias()+1);
        }
        function perderLuta() {
            $this->setDerrotas($this->getDerrotas()+1);
        }
        function empatarLuta() {
            $this->setEmpates($this->getEmpates()+1);
        }
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }
        function getNome() {
            return $this->nome;
        }
        function getNacionalidade() {
            return $this->nacionalidade;
        }
        function getIdade() {
            return $this->idade;
        }
        function getAltura() {
            return $this->altura;
        }
        function getPeso() {
            return $this->peso;
        }
        function getCategoria() {
            return $this->categoria;
        }
        function getVitorias() {
            return $this->vitorias;
        }
        function getDerrotas() {
            return $this->derrotas;
        }
        function getEmpates() {
            return $this->empates;
        }
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }
        function setIdade($idade) {
            $this->idade = $idade;
        }
        function setAltura($altura) {
            $this->altura = $altura;
        }
        function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }
        function setCategoria() {
            $this->categoria = ($this->peso < 56.7 ? "Peso abaixo de galo" : 
                               ($this->peso < 61.3 ? "Galo" : 
                               ($this->peso < 65.8 ? "Pena" : 
                               ($this->peso < 70.4 ? "Leve" :
                               ($this->peso < 77.1 ? "Meio-Médio" :
                               ($this->peso < 84.0 ? "Peso Médio" :
                               ($this->peso < 93.0 ? "Peso Meio-Pesado" :
                               ($this->peso < 120.3 ? "Peso Pesado" : "Peso Superpesado"))))))));
        }
        function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }
        function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }
        function setEmpates($empates) {
            $this->empates = $empates;
        }
    }
