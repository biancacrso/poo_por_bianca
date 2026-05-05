<?php
require_once "pessoa.php";

class Professor extends Pessoa {
    private $funcao;
    private $salario;

    public function __construct($nome, $cpf, $funcao, $salario) {
        parent::__construct($nome, $cpf);
        $this->funcao = $funcao;
        $this->salario = $salario;
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Função: " . $this->funcao . "<br>";
        echo "Salário: R$ " . $this->salario . "<br>";
    }
}