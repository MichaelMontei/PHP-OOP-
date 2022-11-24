<?php

class Connection
{
    private static int $count = 0;

    public function __construct()
    {
        // Self refers to the connection class itself, each time someone connects we count the connections
        self::$count++;
    }

    public static function getCount(): int
    {
        //Static Property! So self::
        return self::$count;
    }
}