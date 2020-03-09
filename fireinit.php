<?php 
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
$factory = (new Factory)
    ->withServiceAccount('xampp-ksr-6e33f806041b.json')
    ->withDatabaseUri('https://xampp-ksr.firebaseio.com/');
$database = $factory->createDatabase();

$newCard = $database->getReference('mods')->getValue();

 ?>