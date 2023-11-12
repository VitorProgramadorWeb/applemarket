<?php
    class Carro {
        public $cor;
        public $modelo;

        public function __construct($cor, $modelo) {
            $this->cor = $cor;
            $this->modelo = $modelo;
        }

        public function message() {
            return "<br>O carro é da cor $this->cor e do modelo $this->modelo";
        }
    }

    $c1 = new Carro("amarela", "Camaro");
    echo $c1->message();
    $c2 = new Carro("vermelha", "Ferrari");
    echo $c2->message();
?>