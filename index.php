<?php

require_once "Book.php";
require_once "Member.php";

echo "<h1>Library OOP Mini</h1>";

$book1 = new Book(
    "Pemrograman Web Framework",
    "Billy Ibrahim Hasbi"
);

$member1 = new Member(
    "Azzahra Nur Salsabila",
    "2410631250045"
);

echo "<h2>Informasi Buku</h2>";
echo $book1->getInfo();

echo "<h2>Informasi Member</h2>";
echo $member1->getInfo();

?>
