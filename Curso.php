<?php

class Curso
{
    private SplStack $alteracoes;
    private SplQueue $filaDeEsperaDeAlunos;
    private SplDoublyLinkedList $alunosMatriculados;

    public function __construct(string $nome)
    {
//        $this->alteracoes = new SplDoublyLinkedList();
        // SplStack é filha de SplDoublyLinkedList
        $this->alteracoes = new SplStack();
        $this->filaDeEsperaDeAlunos = new SplQueue();
        $this->alunosMatriculados = new SplDoublyLinkedList();
    }

    public function adicionaAlteracao(string $alteracao): void
    {
        $this->alteracoes->push($alteracao);
    }

    public function recuperaAlteracoes(): SplStack
    {
        return clone $this->alteracoes;
    }

    public function adicionaAlunoParaEspera(string $aluno): void
    {
        $this->filaDeEsperaDeAlunos->enqueue($aluno);
    }

    public function recuperaAlulnosEsperando(): SplQueue
    {
        return clone $this->filaDeEsperaDeAlunos;
    }

    public function matriculaAluno(string $aluno): void
    {
        $this->alunosMatriculados->push($aluno);
    }

    public function recuperaAlunosMatriculados(): SplDoublyLinkedList
    {
        return clone $this->alunosMatriculados;
    }
}