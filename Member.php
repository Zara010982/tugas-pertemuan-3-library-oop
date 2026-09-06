<?php

class Member
{
    public $name;
    public $nim;

    public function __construct($name, $nim)
    {
        $this->name = $name;
        $this->nim = $nim;
    }

    public function getInfo()
    {
        return "Nama Member: " . $this->name .
               "<br>NIM: " . $this->nim;
    }
}