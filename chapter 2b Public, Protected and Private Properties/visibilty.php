<?php

require_once 'BaseClass.php';
require_once 'SubClass.php';

$baseObject = new BaseClass();
$subObject = new SubClass();

// We can print the protected property with the public getProtectedProperty method
print $baseObject->getProtectedProperty() .PHP_EOL;

// Now we need to print it in the subclass, and we can also access it here
print $subObject->getProtectedProperty() .PHP_EOL;

// We can get access to the private property from the BaseClass by the getPrivateProperty method
print $baseObject->getPrivateProperty(). PHP_EOL;