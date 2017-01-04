<?php

require("vendor/autoload.php");
date_default_timezone_set("America/New_York");

//use Monolog\Logger;
//use Monolog\Handler\StreamHandler;
//
//$log = new Logger('name');
//$log->pushHandler(new StreamHandler('app.txt', Logger::WARNING));
//$log->addWarning('Foo');

$app = new \Slim\Slim();

$app->get('/', function() {
  echo("Home");
});

$app->get('/about', function() {
  echo("About");
});

$app->get('/contact', function() {
  echo("Contact");
});

$app->run();
          
?>