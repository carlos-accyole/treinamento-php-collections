<?php

require_once 'Video.php';

$video1 = new Video("Aprendedo mapas");
$video2 = new Video("Aprendendo Conjuntos");
$video3 = new Video('Aprendendo Mapas');

//$videosAssistidos = new SplObjectStorage();
//$videosAssistidos->attach($video1, new DateTimeImmutable('2021-02-03'));

//outra forma de fazer com SplObjectStorage
//$videosAssistidos[$video1] = new DateTimeImmutable('2021-02-01');

$videosAssistidos = new Map();

$videosAssistidos->put($video1, new DateTimeImmutable('2021-02-03'));
$videosAssistidos->put($video2, new DateTimeImmutable('2021-02-03'));
$videosAssistidos->put($video3, new DateTimeImmutable());

echo $videosAssistidos->get($video1)->format('d/m/Y') . PHP_EOL;

$primeiroVideoAssistido = $videosAssistidos->first();
$primeiroVideoAssistido->value;

//echo $videosAssistidos[($video1)]->format('d/m/Y') . PHP_EOL;
