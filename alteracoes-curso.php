<?php

require_once 'Curso.php';

$curso = new Curso('Collections com PHP');
$curso->adicionaAlteracao('Primeira aula criada');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluíída ');

foreach ($curso->recuperaAlteracoes() as $alteracao) {
    echo $alteracao .PHP_EOL;
}

$curso->adicionaAlunoParaEspera('Carlos Accyole');
$curso->adicionaAlunoParaEspera('Gabriela Accyole');
$curso->adicionaAlunoParaEspera('Rafaela Accyole');

foreach ($curso->recuperaAlulnosEsperando() as $aluno) {
    echo $aluno . PHP_EOL;
}

$curso->matriculaAluno('Gabiela Accyole');
$curso->matriculaAluno('Rafaela Accyole');
$curso->matriculaAluno('Gabiela Accyole');

echo '-----------------------------------------' . PHP_EOL;

foreach ($curso->recuperaAlunosMatriculados() as $alunosMatriculado) {
    echo $alunosMatriculado . PHP_EOL;
}
