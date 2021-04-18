<?php

class Aluno
{
    public string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
}