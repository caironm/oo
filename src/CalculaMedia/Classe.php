<?php

namespace Src\CalculaMedia;

class Classe extends Aluno implements InterfaceClasse
{

    public function mediaAluno(int $nota)
    {
        $this->nota = $nota;
        $media = ($this->n1 + $this->n2 + $this->n3 + $this->n4) / 4;
        $this->media = $media;

        if ($this->media > $this->nota) {
            return "{$this->nome} passou com a nota: {$this->media}";
        } else {
            return "{$this->nome} foi reprovado com a nota: {$this->media}";
        }
    }
}
