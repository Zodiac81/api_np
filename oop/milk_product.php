<?php

ini_set("display_errors",1);
error_reporting(E_ALL);

require_once 'app/ShopProduct.php';
$title = "Milk";
$productMainName = "Cat";
$productFirstName = "Seaman";
$price = "5.00";
$productObj = new ShopProduct ($title, $productMainName, $productFirstName, $price);

echo $productObj->ProductInfo();
//echo $productObj->title;