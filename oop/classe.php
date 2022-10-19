<?php
    class Cliente{
        public $nome = 'Anônimo';
        public $idade = 18;

        function __construct($novoNome, $idade){
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        public function apresentar(){
            echo "meu nome é {$this->nome} idade: $this->idade";
        }
    }

    class Usuario extends Cliente{
        public $cred;

        function __construct($novoNome, $idade, $cred){
            $this->nome = $novoNome;
            $this->idade = $idade;
            $this->cred = $cred;
        }
    }

    $cliente1 = new Cliente("jj", 98);
    $cliente1->apresentar();