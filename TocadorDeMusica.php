<?php

class TocadorDeMusica
{
    private $musicas;

    public function __construct() {
        $this->musicas = new SplDoublyLinkedList();
        $this->musicas->rewind();
    }

    public function adicionarMusicas(SplFixedArray $musicas) {
        for($musicas->rewind(); $musicas->valid(); $musicas->next()) {
            $this->musicas->push($musicas->current());
        }

        $this->musicas->rewind();
    }

    public function tocarMusica() {
        if ($this->musicas->count() === 0) {
            echo "Nenhuma música encontrada<br>";
        } else {
            echo "Tocando música: " . $this->musicas->current() . "<br>";
        }
    }

    public function adicionarMusica($musica) {
        $this->musicas->push($musica);
    }

    public function avancarMusica($musica) {
        $this->musicas->next();

        if(!$this->musicas->valid()) {
            $this->musicas->rewind();
        }
    }

    public function voltarMusica($musica) {
        $this->musicas->prev();

        if(!$this->musicas->valid()) {
            $this->musicas->rewind();
        }
    }

    function exibirMusicas() {
        for($this->musicas->rewind();$this->musicas->valid();$this->musicas->next()) {
            echo "Música: " . $this->musicas->current() . "<br>";
    }

        $this->musicas->rewind();
    }

    function exibirQuantidadeDeMusicas() {
        echo "Existem:  " . $this->musicas->count() . " músicas no tocador" . "<br>";
    }

    function adicionarMusicaNoComecoDaPlaylist($musica) {
        $this->musicas->unshift($musica);
    }

    function removerMusicaDoComecoDaPlaylist() {
        $this->musicas->shift();
    }

    function removerUltimaMusicaDaPlaylist() {
        $this->musicas->pop();
    }
}