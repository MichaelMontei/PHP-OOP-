<?php

require_once 'Counter.php';
require_once 'Connection.php';

// Static Classes we can access by the 2 times semicolons instead of the arrow function like in the methods
//Counter::$count++;
//print Counter::$count;

// we make two new connections and print them out with the static class
$connection1 = New Connection();
$connection2 = New Connection();
print Connection::$count . PHP_EOL;