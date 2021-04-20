<?php

use Ds\Hashable;

class Aluno implements Hashable
{
    public string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function equals($obj): bool
    {
        if (!$obj instanceof Aluno) {
            return false;
        }

        return $obj->nome === $this->nome;
    }

    public function hash()
    {
        return $this->nome;
    }
}