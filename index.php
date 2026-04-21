<?php
class Playlist
{
    public function __construct(public $name, public $songs) 
    {
        $this->name = $name;
        $this->songs = $songs;
    }

    public function shuffle() 
    {
        shuffle($this->songs);
    }
}

$playlist = [];

$playlist[] = new Playlist('80s Headbangers', [
    'Back in black',
    'Are you ready',
    'Hells bells',
    'Highway to hell'
]);

$playlist[0]->shuffle();

die(var_dump($playlist));