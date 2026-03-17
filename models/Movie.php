<?php

require_once __DIR__ . '/Genre.php';

class Movie
{
    public string $title;
    public int $year;
    public float $rating;
    public Genre $genre;

    public function __construct(string $title, int $year, float $rating, Genre $genre)
    {
        $this->title  = $title;
        $this->year   = $year;
        $this->rating = $rating;
        $this->genre  = $genre;
    }

    public function getInfo(): string
    {
        return "{$this->title} ({$this->year}) - Genere: {$this->genre->name} - Voto: {$this->rating}";
    }
}
