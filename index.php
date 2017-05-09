<?php
// include the composer autoloader
require_once __DIR__ . '/vendor/autoload.php'; 

// import the Symfony Console Application 
use Symfony\Component\Console\Application; 

$app = new Application();
$app->run();
?>