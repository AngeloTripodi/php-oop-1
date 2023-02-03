<?php
class Movie
{
    public $title;
    public $year;
    public $coverImage;
    public $actors;

    public function __construct($_title, $_year, $_coverImage, Actors $_actors)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->coverImage = $_coverImage;
        $this->actors = $_actors;
    }

    public function getActors()
    {
        return $this->actors;
    }
}
