<?php

require_once 'Curso.php';
require_once 'Aluno.php';

$curso = new Curso('Collections com PHP');
$curso->adicionaAlteracao('Primeira aula criada');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluíída ');

foreach ($curso->recuperaAlteracoes() as $alteracao) {
    echo $alteracao .PHP_EOL;
}

$curso->adicionaAlunoParaEspera(new Aluno('Carlos Accyole'));
$curso->adicionaAlunoParaEspera(new Aluno('Gabiela Accyole'));
$curso->adicionaAlunoParaEspera(new Aluno('Rafaela Accyole'));

echo '-----------------------------------------' . PHP_EOL;

foreach ($curso->recuperaAlulnosEsperando() as $aluno) {
    echo $aluno->nome . PHP_EOL;
}

$curso->matriculaAluno(new Aluno('Gabiela Accyole'));
$curso->matriculaAluno(new Aluno('Rafaela Accyole'));
$curso->matriculaAluno(new Aluno('Gabiela Accyole'));

echo '-----------------------------------------' . PHP_EOL;

foreach ($curso->recuperaAlunosMatriculados() as $aluno) {
    echo $aluno->nome . PHP_EOL;
}

$gabrielaEstaMatriculada = $curso->recuperaAlunosMatriculados()->contains($gabriela);
var_dump($gabrielaEstaMatriculada);
