<?php
require_once "pessoa.php";

class Visitante extends Pessoa {

    public function __construct($nome, $cpf) {
        parent::__construct($nome, $cpf);
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Tipo: Visitante<br>";
    }
}