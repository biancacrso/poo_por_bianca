<?php

require_once "estudante.php";
require_once "professor.php";
require_once "servidor.php";
require_once "visitante.php";

echo "<h2>Estudante: </h2>";
$e = new Estudante("Bianca Pereira Cardoso", "000.000.000-01", "Sistemas de Informação");
$e->exibirDados();

echo "<hr>";

echo "<h2>Professor: </h2>";
$p = new Professor("Caroline dos Reis Biazin", "000.000.000-02", "Docente", 5000);
$p->exibirDados();

echo "<hr>";

echo "<h2>Servidor: </h2>";
$s = new Servidor("Billie Eilish Pirate Baird O'Connell", "000.000.000-03", "Assistente Administrativo", 3000);
$s->exibirDados();

echo "<hr>";

echo "<h2>Visitante: </h2>";
$v = new Visitante("Christopher Edwin Breaux", "000.000.000-04");
$v->exibirDados();