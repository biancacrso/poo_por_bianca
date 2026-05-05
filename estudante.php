<?php
require_once "pessoa.php";

class Estudante extends Pessoa {
    private $curso;

    public function __construct($nome, $cpf, $curso) {
        parent::__construct($nome, $cpf);
        $this->curso = $curso;
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Curso: " . $this->curso . "<br>";
    }
}