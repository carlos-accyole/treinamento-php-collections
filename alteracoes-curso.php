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

$gabriela = new Aluno('Gabiela Accyole');
$curso->adicionaAlunoParaEspera(new Aluno('Carlos Accyole'));
$curso->adicionaAlunoParaEspera($gabriela);
$curso->adicionaAlunoParaEspera(new Aluno('Rafaela Accyole'));

foreach ($curso->recuperaAlulnosEsperando() as $aluno) {
    echo $aluno->nome . PHP_EOL;
}

$curso->matriculaAluno($gabriela);
$curso->matriculaAluno(new Aluno('Rafaela Accyole'));
$curso->matriculaAluno($gabriela);

echo '-----------------------------------------' . PHP_EOL;

foreach ($curso->recuperaAlunosMatriculados() as $aluno) {
    echo $aluno->nome . PHP_EOL;
}

$gabrielaEstaMatriculada = $curso->recuperaAlunosMatriculados()->contains($gabriela);
var_dump($gabrielaEstaMatriculada);
