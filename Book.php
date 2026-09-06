<?php

class Book
{
    public $title;
    public $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo()
    {
        return "Judul: " . $this->title .
               "<br>Penulis: " . $this->author;
    }
}