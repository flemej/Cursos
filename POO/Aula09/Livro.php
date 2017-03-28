<?php
    require_once 'Publicacao.php';
    require_once 'Pessoa.php';
    
    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;
        
        public function detalhes() {
            echo "<hr/>";
            echo "<p>Titulo: {$this->titulo}</p>";
            echo "<p>Autor: {$this->autor}</p>";
            echo "<p>Nº Páginas: {$this->getTotPaginas()}. Atual: {$this->getPagAtual()}</p>";
            echo "<p>Sendo lido por {$this->leitor->getNome()}</p>";
        }
        function __construct($titulo, $autor, $totPaginas, $leitor) {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setAberto(false);
            $this->setPagAtual(0);
            $this->setLeitor($leitor);            
        }
        public function abrir() {
            echo "<p>Abrindo livro</p>";
            $this->setAberto(true);
        }
        public function fechar() {
            echo "<p>Fechando livro</p>";
            $this->setAberto(false);
        }
        public function avancarPag() {
            echo "<p>Avançando página</p>";
            if ($this->getPagAtual()<$this->getTotPaginas()) {
                $this->setPagAtual($this->getPagAtual()+1);
                echo "<p>Página atual: {$this->getPagAtual()}";
            }
            else {
                echo "<p>Última página</p>";
            }
        }
        public function voltarPag() {
            echo "<p>Voltando pagina</p>";
            if ($this->getPagAtual()>1) {
                $this->setPagAtual($this->getPagAtual()-1);
                echo "<p>Página atual: {$this->getPagAtual()}";
            }
            else {
                echo "<p>Primeira página</p>";
            }
        }
        public function folhear($p) {
            echo "<p>Folheando para página {$p}</p>";
            if ($p > $this->getTotPaginas()) {
                echo "<p>Impossível ir para a página $p em um livro de {$this->getTotPaginas()} páginas";
                $this->setPagAtual(1);                
            }
            else {
                $this->setPagAtual($p);
                echo "<p>Página atual: {$this->getPagAtual()}";
            }
        }
        private function getTitulo() {
            return $this->titulo;
        }
        private function getAutor() {
            return $this->autor;
        }
        private function getTotPaginas() {
            return $this->totPaginas;
        }
        private function getPagAtual() {
            return $this->pagAtual;
        }
        private function getAberto() {
            return $this->aberto;
        }
        private function getLeitor() {
            return $this->leitor;
        }
        private function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        private function setAutor($autor) {
            $this->autor = $autor;
        }
        private function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }
        private function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }
        private function setAberto($aberto) {
            $this->aberto = $aberto;
        }
        private function setLeitor($leitor) {
            $this->leitor = $leitor;
        }
    }
