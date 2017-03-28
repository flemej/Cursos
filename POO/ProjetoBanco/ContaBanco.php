<?php

    class ContaBanco {

        //Atributos
        public $numeroConta;
        protected $tipoConta;
        private $dono;
        private $saldo;
        private $statusConta;
        private $vrlMensalidade;
        private $statusMensalidade;
        private $depositoInicial;

        //Metodos
        public function abrirConta($_tipoConta) {
            $this->setTipoConta($_tipoConta);
            $this->setStatusConta(true);
            $this->setValorMensalidade();
            $this->setDepositoInicial($_tipoConta);
            $this->setSaldo($this->getDepositoInicial());
            echo "<p>Foi depositada a quantia de {$this->getSaldo()} na sua conta. Seu saldo é {$this->getSaldo()}</p>";
        }

        public function fecharConta() {
            echo "<p>Tentativa de fechar conta</p>";
            if ($this->getStatusConta()) {
                if ($this->getStatusMensalidade()) {
                    if ($this->getSaldo()>0) {
                        Echo "<p>Não é possível fechar a conta pois a mesma possui um saldo de ".$this->getSaldo()."</p>";
                    }
                    elseif ($this->getSaldo()<0) {
                        echo "<p>Existem pendências na sua conta. Impossível fecha-la.</p>";
                    }
                    else {
                        $this->setStatusConta(false);
                        echo "<p>A sua conta foi fechada com sucesso!</p>";
                    }
                
                }
                else {
                    Echo "<p>Existem mensalidades pendentes no valor de {$this->getVlrMensalidade()}. Impossível fechar a conta.</p>";
                }
            }    
        }

        public function depositar($v) {
            echo "<p>Tentativa de depósito</p>";
            if ($this->getStatusConta()) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de $v realizado com sucesso. O seu saldo é {$this->getSaldo()}";
            }
            else {
                echo "<p>Conta indisponível</p>";
            }
        }

        public function sacar($v) {
            echo "<p>Valor solicitado para saque: $v";
            if ($this->getStatusConta()) {
                if ($this->getSaldo()>= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de $v realizado com sucesso. Seu saldo é ".$this->getSaldo()."</p>";
                }
                else {
                    echo "<p>O seu saldo é insuficiente. Valor solicitado: $v</p>";
                }
            }
            else {
                echo "<p>Conta indisponível</p>";
            }     
        }

        public function pagarMensalidade() {
            if ($this->getStatusConta()) {
                echo "<p>Pagando mensalidade</p>";
                if ($this->getSaldo() >= ($this->getVlrMensalidade())) {
                    $this->setSaldo($this->getSaldo() - ($this->getVlrMensalidade()));
                    echo "<p>A sua mensalidade no valor de {$this->getVlrMensalidade()} foi debitada com sucesso! O seu saldo é {$this->getSaldo()}</p>";
                    $this->setStatusMensalidade(true);
                }
                else {
                    echo "<p>Saldo insuficiente para cobrança da tarifa. Valor da tarifa: {$this->getVlrMensalidade()}. Seu saldo atual é {$this->getSaldo()}</p>";
                }
            }
            else {
                echo "<p>Conta indisponível</p>";
            }
        }

        public function getNumConta() {
            return $this->numeroConta;
        }

        public function getTipoConta() {
            return $this->tipoConta;
        }

        public function getDono() {
            return $this->dono;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function getStatusConta() {
            return $this->statusConta;
        }
        
        public function getVlrMensalidade() {
            return $this->vrlMensalidade;
        }
        
        public function getStatusMensalidade() {
            return $this->statusMensalidade;
        }
        
        public function getDepositoInicial() {
            return $this->depositoInicial;
        }

        public function setNumConta($numeroConta) {
            $this->numeroConta = $numeroConta;
        }

        public function setTipoConta ($tipoConta) {
            $this->tipoConta = $tipoConta;
        }
        
        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function setStatusConta($statusConta) {
            $this->statusConta = $statusConta;
        }
        
        public function setValorMensalidade() {
            if ($this->getTipoConta()=="CC") {
                $this->vrlMensalidade=12;
            }
            elseif ($this->getTipoConta()=="CP") {
                $this->vrlMensalidade=20;
            }
            else {
                echo "<p>Tipo de conta não definido</p>";
            }
        }
        
        public function setDepositoInicial () {
            if ($this->getTipoConta()=="CC") {
                $this->depositoInicial=150;
            }
            elseif ($this->getTipoConta()=="CP") {
                $this->depositoInicial=100;
            }
            else {
                echo "<p>Tipo de conta não definido</p>";
            }
        }
        
        public function setStatusMensalidade($statusMensalidade) {
            $this->statusMensalidade = $statusMensalidade;
        }
        
        function __construct() {
            $this->setSaldo(0);
            $this->setStatusConta(FALSE);
            $this->setStatusMensalidade(FALSE);
            
            echo "<p>Conta instanciada!</p>";
        }
    }