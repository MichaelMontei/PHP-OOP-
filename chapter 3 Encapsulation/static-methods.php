<?php

require_once 'Connection.php';

// Instantiate the Static Class Connection and make a new object connection.
$connection = new Connection();
print Connection::getCount() .PHP_EOL;