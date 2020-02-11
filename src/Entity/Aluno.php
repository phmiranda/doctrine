<?php


namespace Alura\Doctrine\Entity;


class Aluno {
    private $id;
    private $nome;

    public function getId() : int {
        return $this->id;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}
