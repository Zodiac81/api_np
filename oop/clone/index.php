<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'Person.php';

$person = new Person('Alexey', '23', new Account('200'));
$person->getId('1');
$person->account->balance +=10;


$person2 = clone $person;
$person3 = clone $person;

print_r($person->getName());
echo "<br>";
print_r($person2->account->balance);
echo "<br>";
print_r($person3->account->balance);