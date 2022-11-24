<?php

require_once 'Song.php';

$song = new Song('Jane Doe', 100, 1);

$song->setRating(9);

print $song->getRating();