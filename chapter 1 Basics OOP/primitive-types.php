<?php



//boolean
//integer
//float
//string
//object
//resource
//array
//null

declare(strict_types=1);

require_once 'Song.php';

$song = new Song('Master of Puppets', 3);
print $song->name;