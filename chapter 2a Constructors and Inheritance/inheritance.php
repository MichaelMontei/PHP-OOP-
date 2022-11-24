<?php

require_once 'Book.php';
require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$book = new Book('The whale', 'Marc Twain', 20);

$physicalBook = new PhysicalBook('Random Book', 'Jeff Bell', 100, 5);
$digitalBook = new DigitalBook('For where we go', 'Mark Twain', 299, '100mb');

print $physicalBook->print() . PHP_EOL;
print $digitalBook->print() .PHP_EOL;

//print $book->getAuthor() . PHP_EOL;
//print $digitalBook->getAuthor(). PHP_EOL;

