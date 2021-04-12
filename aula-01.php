<?php

require "TocadorDeMusica.php";

$musicas = new SplFixedArray(4);

$musicas[0] = "One Dance";
$musicas[1] = "Closer";
$musicas[2] = "rockstar";
$musicas[3] = "Love Yourself";

$tocador = new TocadorDeMusica();
$tocador->adicionarMusicas($musicas);
$tocador->tocarMusica();
$tocador->exibirMusicas();
$tocador->exibirQuantidadeDeMusicas();
$tocador->adicionarMusicaNoComecoDaPlaylist("Havana");
$tocador->removerMusicaDoComecoDaPlaylist();
$tocador->adicionarMusica("Havana");
$tocador->removerUltimaMusicaDaPlaylist();