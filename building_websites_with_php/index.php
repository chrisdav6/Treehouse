<?php

require("vendor/autoload.php");
date_default_timezone_set("America/New_York");

//use Monolog\Logger;
//use Monolog\Handler\StreamHandler;
//
//$log = new Logger('name');
//$log->pushHandler(new StreamHandler('app.txt', Logger::WARNING));
//$log->addWarning('Foo');

$app = new \Slim\Slim( array(
  'view' => new \Slim\Views\Twig()
));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
);

$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

$app->get('/', function() use($app){
  $app->render('about.twig');
})->name('home');

$app->get('/contact', function() use($app){
  $app->render('contact.twig');
})->name('contact');

$app->post('/contact', function() use($app){
  $name = $app->request->post('name');
  $email = $app->request->post('email');
  $msg = $app->request->post('msg');
  
  if(!empty($name) && !empty($email) && !empty($msg)) {
    echo("Success!");
  } else {
    echo("Fail");
    $app->redirect('/contact');
  }
});

$app->run();
          
?>