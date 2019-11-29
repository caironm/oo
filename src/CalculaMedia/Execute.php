<?php

namespace Src\CalculaMedia;

class Execute
{

    protected $a;
    protected $alunos;

    public function __construct($alunos)
    {
        $this->alunos = $alunos;
    }

    public function ObterMedia()
    {
        $this->a = new Classe();
        foreach ($this->alunos as $aluno) {
            $this->a->setNome($aluno["nome"]);
            $this->a->setN1($aluno["n1"]);
            $this->a->setN2($aluno["n2"]);
            $this->a->setN3($aluno["n3"]);
            $this->a->setN4($aluno["n4"]);
            echo $this->a->mediaAluno(6);
            echo "<br>";
        }
    }
}
