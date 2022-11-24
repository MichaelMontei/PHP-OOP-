<?php

require_once 'Song.php';

// We make an array with songs Names
$songTitles = ['Yesterday', 'Help', 'Something'];

// Let's make a new song Object and pass in the first element of that array + $numberOfPlays we specified as a property in that class.
$song = new Song($songTitles[0], 100);


var_dump($song->name);