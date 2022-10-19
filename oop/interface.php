<?php
/*Interface*/
Interface Assinatura{
    function teste();
}

/*Implementaçã*/
Class B implements Assinatura{
    public function teste(){
        return 'Assinatura implementada';
    }
}

$teste = new B();
$teste->teste();
?>