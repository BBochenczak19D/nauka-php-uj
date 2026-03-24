<?php declare(strict_types=1);
require_once dirname(__DIR__) . '/inc/debug.inc.php';
require_once __DIR__ . '/Ship.php';

$myShip = new Ship();
$myShip->name = 'Bluenose';
$myShip->homeport = 'Lunenburg';

echo 'Ship name: ' . $myShip->name; 

var_dump($myShip);


$anotherShip = $myShip;

$anotherShip->name = 'RMS Titanic';
$anotherShip->homeport = 'Liverpool';

var_dump($myShip);
var_dump($anotherShip);

$myShip = new Ship();
$myShip->name = 'Bluenose';
$myShip->homeport = 'Lunenburg';

$anotherShip = clone $myShip;
//kopiowanie

$anotherShip->name = 'RMS Titanic';
$anotherShip->homeport = 'Liverpool';

var_dump($myShip);
var_dump($anotherShip);
