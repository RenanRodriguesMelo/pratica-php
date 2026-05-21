<?php

class Conta {
    private $agencia;
    private $numero;
    private $saldo;

    function __construct($agencia, $numero, $saldo) {
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    public function getDetalhes() {
        return "Agência: " . $this->agencia . "<br>" .
            "Numero: " . $this->numero . "<br>" .
            "Saldo: " . $this->saldo;
    }
}

$conta1 = new Conta("001", "12345-6", 1000.00);

echo $conta1->getDetalhes();
