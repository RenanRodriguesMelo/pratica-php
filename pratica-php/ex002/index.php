<?php

// definindo a classe Conta com atributos privados e um método público para exibir os detalhes da conta //
class Conta {
    private $agencia;
    private $numero;
    private $saldo;

    // construtor para inicializar os atributos da conta, ele recebe os valores como parâmetros //
    function __construct($agencia, $numero, $saldo) {
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    // método para exibir os detalhes da conta //
    public function getDetalhes() {
        return "Agência: " . $this->agencia . "<br>" .
            "Numero: " . $this->numero . "<br>" .
            "Saldo: " . $this->saldo;
    }
}

// criando uma nova conta e exibindo seus detalhes //
$conta1 = new Conta("001", "12345-6", 1000.00);

// exibindo os detalhes da conta usando o método getDetalhes() //
echo $conta1->getDetalhes();
