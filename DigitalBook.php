<?php

require_once "Book.php";

class DigitalBook extends Book
{
    public $fileFormat;

    public function __construct($title, $author, $fileFormat)
    {
        parent::__construct($title, $author);

        $this->fileFormat = $fileFormat;
    }

    public function getInfo()
    {
        return parent::getInfo() .
               "<br>Format: " . $this->fileFormat;
    }

    public function download()
    {
        return "Digital book berhasil diunduh.";
    }
}