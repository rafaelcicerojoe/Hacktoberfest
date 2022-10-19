<?php

abstract class Abstrata{
    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}

/*herdando metodos e implementando em um deles*/
abstract class FilhaAbstrata extends Abstrata{
    public function metodo1(){
        echo '1+1';
    }
}

class Concreta extends FilhaAbstrata{
    public function metodo1(){
        echo "reescrevendo o metodo e utilizando com a implementacao antiga <br>";
        parent::metodo1();
    }
    public static function metodo3(){
        echo "metodo 3 implllementado na classe concreta";
    }

    public function metodo2($parametro){
        echo"metodo 2";
    }
}

// chamadas de código
$obj = new Concreta();
$obj->metodo1();
$obj->metodo2("teste");
$obj->metodo3();
Concreta::metodo3();