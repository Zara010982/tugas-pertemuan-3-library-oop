<?php

require_once "Book.php";
require_once "Member.php";
require_once "DigitalBook.php";

echo "<h1>Library OOP Mini</h1>";

$book1 = new Book(
    "Pemrograman Web Framework",
    "Billy Ibrahim Hasbi"
);

$member1 = new Member(
    "Azzahra Nur Salsabila",
    "2410631250045"
);

$digitalBook = new DigitalBook(
    "Laravel untuk Pemula",
    "Budi Santoso",
    "PDF"
);

echo "<h2>Informasi Buku</h2>";
echo $book1->getInfo();

echo "<br><br>";

echo "<h2>Informasi Member</h2>";
echo $member1->getInfo();

echo "<br><br>";

echo "<h2>Informasi Digital Book</h2>";
echo $digitalBook->getInfo();

echo "<br><br>";

echo $digitalBook->download();

?>
