<?php

require_once 'Song.php';
require_once 'Playlist.php';

$beatlesSongs = new Playlist();
$song = new Song('Yesterday', 100);

// Fake song to demonstrate
$fakeSong = 'This is not a song but a string';

// Let's add the song the playlists' song array
//$beatlesSongs->songs[] = $song;
//$beatlesSongs->songs[] = $fakeSong;

// This won't work because we said in our Playlist that only Songs can be added to the song array, and not strings
//$beatlesSongs->addSong($fakeSong);

// This will work because we made a new Song Object, and it passes the rules we set in our Playlist class
$beatlesSongs->addSong($song);

var_dump($beatlesSongs->getSongs());

