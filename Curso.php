<?php

use Ds\{Stack, Queue, Set};

class Curso
{
//    private SplStack $alteracoes;
    //utilizando extensão Ds
    private Stack $alteracoes;
//    private SplQueue $filaDeEsperaDeAlunos;
    private Queue $filaDeEsperaDeAlunos;
//    private SplObjectStorage $alunosMatriculados;
    private Set $alunosMatriculados;

    public function __construct(string $nome)
    {
//        $this->alteracoes = new SplDoublyLinkedList();
        // SplStack é filha de SplDoublyLinkedList

//        $this->alteracoes = new SplStack();
        $this->alteracoes = new Stack();
//        $this->filaDeEsperaDeAlunos = new SplQueue();
        $this->filaDeEsperaDeAlunos = new Queue();
//        $this->alunosMatriculados = new SplObjectStorage();
        $this->alunosMatriculados = new Set();
    }

    public function adicionaAlteracao(string $alteracao): void
    {
        $this->alteracoes->push($alteracao);
    }

    public function desfazAlteracao(): void
    {
        $this->alteracoes->pop();
    }

    public function recuperaAlteracoes(): Stack
    {
//        return clone $this->alteracoes;
        return $this->alteracoes->copy();
    }

    public function adicionaAlunoParaEspera(Aluno $aluno): void
    {
//        $this->filaDeEsperaDeAlunos->enqueue($aluno);
        $this->filaDeEsperaDeAlunos->push($aluno);
    }

    public function recuperaAlulnosEsperando(): Queue
    {
//        return clone $this->filaDeEsperaDeAlunos;
        return $this->filaDeEsperaDeAlunos->copy();
    }

    public function matriculaAluno(Aluno $aluno): void
    {
//        $this->alunosMatriculados->attach($aluno);
        $this->alunosMatriculados->add($aluno);
    }

//    public function recuperaAlunosMatriculados(): SplObjectStorage
    public function recuperaAlunosMatriculados(): Set
    {
        return $this->alunosMatriculados->copy();
    }
}