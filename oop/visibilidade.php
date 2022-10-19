<?php
Class A{
    public $publico = 'publico';
    protected $protegido = 'protectec';
    private $privado = 'private';

    public function mostrar(){
        echo "publico: {$this->publico} protected: {$this->protegido} privado: {$this->privado}";
    }

    public function naoMostrar(){
        echo "publico: {$this->publico} protected: {$this->protegido} privado: {$this->privado}";
    }
}

$a = new A();
$a->mostrar();
$a->naoMostrar();




?>