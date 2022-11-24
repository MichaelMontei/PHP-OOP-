<?php

require_once 'Playlist.php';
require_once 'Song.php';

//First lets make a new playlist with the Playlist Class
$playlist = new Playlist();

//let's make new songs with the Song Class
$song1 = new Song('Blackbird', 100);
$song2 = new Song('Sabbath', 100);

//let's add the songs to the playlist by using the method in Playlist and pass the song variables.
$playlist->addSong($song1);
$playlist->addSong($song2);

if ($playlist->getLength() < 10) {
    print 'Short playlist...';
}
