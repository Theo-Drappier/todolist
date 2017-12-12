<?php
  require '../vendor/autoload.php';
  require '../vendor/mustache/mustache/src/Mustache/Autoloader.php';
  Mustache_Autoloader::register();

  $connection = \Todo\tools\Connection::getInstance();

  $app = new Mustache_Engine([
    'loader' => new Mustache_Loader_FilesystemLoader(__DIR__.'/../views'),
  ]);

  $tasks = $connection->request('SELECT * FROM task');

  echo $app->render('index.mustache', ['tasks' => $tasks]);

?>
