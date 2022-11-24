<?php

class Song
{
    public string $name;
    public int $numberOfPlays;

    /**
     * @var int|float
     */
    private int | float $rating;

    public function __construct(string $name, int $numberOfPlays, int |float $rating)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getNumberOfPlays(): int
    {
        return $this->numberOfPlays;
    }

    /**
     * @param int $numberOfPlays
     */
    public function setNumberOfPlays(int $numberOfPlays): void
    {
        $this->numberOfPlays = $numberOfPlays;
    }

    /**
     * @return float|int
     */
    public function getRating(): float|int
    {
        return $this->rating;
    }

    /**
     * @param float|int $rating
     */
    public function setRating(float|int $rating): void
    {
        // if < 0 attempted, set to 0
        $rating = max(0, $rating);
        // if > 5 attempted, set to 5
        $this->rating = min(5, $rating);
    }


}