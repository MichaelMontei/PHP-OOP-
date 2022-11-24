<?php

class BaseClass
{
    public string $publicProperty = 'Public properties and methods can be accessed anywhere in your code';

    protected string $protectedProperty = 'Protected properties and methods can only be accessed within the declaring class or from a subclass';

    private string $privateProperty = 'Private properties and methods can only be accessed within the declaring class. They are not visible anywhere else';

    //Since we can't access the protected property from outside we need to make a public get function
    public function getProtectedProperty(): string
    {
        return $this->protectedProperty;
    }

    public function getPrivateProperty(): string
    {
        return $this->privateProperty;
    }
}