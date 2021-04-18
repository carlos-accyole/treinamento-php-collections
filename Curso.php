<?php

class Curso
{
    private SplStack $alteracoes;
    private SplQueue $filaDeEsperaDeAlunos;
    private SplObjectStorage $alunosMatriculados;

    public function __construct(string $nome)
    {
//        $this->alteracoes = new SplDoublyLinkedList();
        // SplStack é filha de SplDoublyLinkedList
        $this->alteracoes = new SplStack();
        $this->filaDeEsperaDeAlunos = new SplQueue();
        $this->alunosMatriculados = new SplObjectStorage();
    }

    public function adicionaAlteracao(string $alteracao): void
    {
        $this->alteracoes->push($alteracao);
    }

    public function recuperaAlteracoes(): SplStack
    {
        return clone $this->alteracoes;
    }

    public function adicionaAlunoParaEspera(Aluno $aluno): void
    {
        $this->filaDeEsperaDeAlunos->enqueue($aluno);
    }

    public function recuperaAlulnosEsperando(): SplQueue
    {
        return clone $this->filaDeEsperaDeAlunos;
    }

    public function matriculaAluno(Aluno $aluno): void
    {
        $this->alunosMatriculados->attach($aluno);
    }

    public function recuperaAlunosMatriculados(): SplObjectStorage
    {
        return clone $this->alunosMatriculados;
    }
}