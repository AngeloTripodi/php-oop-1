<?php
class Movie
{
    public $title;
    public $year;
    public $coverImage;
    public $actor;

    public function __construct($_title, $_year, $_coverImage, Actor $_actor)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->coverImage = $_coverImage;
        $this->actor = $_actor;
    }

    public function getActor()
    {
        return $this->actor;
    }
}
