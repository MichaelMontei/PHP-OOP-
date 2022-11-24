<?php

class DigitalBook extends Book
{
    public string $fileSize;

    public function __construct(string $title, string $author, int $price, string $fileSize)
    {
        parent::__construct($title, $author, $price);

        $this->fileSize = $fileSize;
    }

    public function getFileSize(): string
    {
        return $this->fileSize;
    }

    public function print(): string
    {
        return "{$this->title}, {$this->author}, €{$this->price} FileSize: {$this->fileSize}";
    }
}