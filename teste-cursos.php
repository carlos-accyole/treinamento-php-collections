<?php

$cursos = [
  'Introdução com PHP',
  'DDD com PHP',
  'Coleções em PHP'
];

$cursoOo = [
    'Orientação a Objetos',
    'Object Calisthenics com PHP'
];

//junçõa de arrays
$novoArray = array_merge($cursos, $cursoOo);

//pega/retira o primeiro elemento de um array
$primeiraPosicaoArray = array_shift($novoArray);
//var_dump($primeiraPosicaoArray, $novoArray);

//pega/retira o último elemento de um array
$ultimaPosicaoArray = array_pop($novoArray);
//var_dump($ultimaPosicaoArray, $novoArray);

//adiciona elementos no inicio do array
array_unshift($novoArray, 'Instalando PHP');
var_dump($novoArray);


//$cursos[] = 'Arrays em PHP';
//array_push($cursos, 'Array de Teste', 'testando arrays');

