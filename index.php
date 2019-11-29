<?php
header('Content-Type: text/html; charset=utf-8');

require "vendor/autoload.php";

use Src\CalculaMedia\Execute;

$alunos = [
    ["nome" => "Allan", "n1" => 7.4, "n2" => 8.0, "n3" => 5.2, "n4" => 6.4],
    ["nome" => "Philipe", "n1" => 4.2, "n2" => 7.9, "n3" => 5.8, "n4" => 3.1],
    ["nome" => "Maria", "n1" => 7.9, "n2" => 8.2, "n3" => 9.0, "n4" => 9.8]
];

$r = new Execute($alunos);
$r->ObterMedia();
