<?php

ini_set("display_errors",1);
error_reporting(E_ALL);

require_once 'app/Book.php';

$book = new Book('Dog`s heart', 'Bulgakov', 'Michael', '5.99', '999');

echo $book->ProductInfo();
