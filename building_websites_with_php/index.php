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

$app->add(new \Slim\Middleware\SessionCookie());

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
    $cleanName = filter_var($name, FILTER_SANITIZE_STRING);
    $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $cleanMsg = filter_var($msg, FILTER_SANITIZE_STRING);
    echo("$cleanName - $cleanEmail - $cleanMsg");
  } else {
    $app->flash('fail', 'All fields must be filled out');
    $app->redirect('/contact');
  }
  
  $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
  $mailer = \Swift_Mailer::newInstance($transport);
  
  $message = \Swift_Message::newInstance();
  $message->setSubject('Email From Our Website');
  $message->setFrom(array(
    $cleanEmail => $cleanName 
  ));
  $message->setTo(array('treehouse@localhost'));
  $message->setBody($cleanMsg);
  
  $result = $mailer->send($message);
  
  if($result > 0) {
    $app->flash('success', 'Thanks So Much Dingus!');
    $app->redirect('/');
  } else {
    $app->flash('fail', 'Something went wrong!');
    $app->redirect('/contact');
  }
  
});

$app->run();
          
?>