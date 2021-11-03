<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/PrimiumUser.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/SoftwareProduct.php";

// credit cards

$visa = new CreditCard(236458909657843, "Visa", 233, 2020);
$mastercard = new CreditCard(236458909657843, "Visa", 233, 2020);

// products
$laptop = new Product("GP66", "portatili", "msi", 1000);
$tablet = new Product("s6", "tablet", "samsung", 500);
$anti_virus = new SoftwareProduct("McAfee Total Protection 2022", "software", "McAfee", 20, "windows", "download");

// users
$user1 = new  User("Mario", "Rossi", "via Mazzini 12");
$user1->setShoppingCart($laptop);
$user1->setShoppingCart($anti_virus);
$user1->setCreditCard($mastercard);

$user2 = new PremiumUser("Luigi", "Verdi", "via Garibaldi 119");
$user2->setShoppingCart($tablet);
$user2->setCreditCard($visa);


echo '<pre>';
var_dump($user1, $user2);
echo '</pre>';

