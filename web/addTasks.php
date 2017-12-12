<?php
  require '../vendor/autoload.php';
  require '../vendor/mustache/mustache/src/Mustache/Autoloader.php';
  Mustache_Autoloader::register();

  $app = new Mustache_Engine([
    'loader' => new Mustache_Loader_FilesystemLoader(__DIR__.'/../views'),
  ]);

  echo $app->render('addTasks.mustache');
?>
