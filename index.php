<?php
class Playlist
{
    public $name; 

    public function __construct($name) 
    {
        $this->name = $name;
    }
}

$playlist = new Playlist('Depressing 90s');

die(var_dump($playlist));