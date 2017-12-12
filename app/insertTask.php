<?php
require '../vendor/autoload.php';

use Todo\tools\Connection;

$connection = Connection::getInstance();
if(!empty($_POST['task']))
{
  $request = 'INSERT INTO task (action) VALUES ("'.$_POST['task'].'")';
  $connection->exec($request);
  header('location: ../web');
}
else
{
  header('location: addTasks.php?error=noAdd');
}
?>
