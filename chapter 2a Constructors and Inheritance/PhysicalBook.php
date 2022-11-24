<?php

class PhysicalBook extends Book
{
    public int $weight;

    public function __construct(string $title, string $author, int $price, int $weight)
    {
        parent::__construct($title, $author, $price);

        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function print(): string
    {
       return "{$this->title}, {$this->author}, €{$this->price} weight: {$this->weight}";
    }
}