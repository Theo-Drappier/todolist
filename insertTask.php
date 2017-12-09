<?php
require 'class/Connection.php';
$connection = Connection::getInstance();
if(!empty($_POST['task']))
{
  $request = 'INSERT INTO task (action) VALUES ("'.$_POST['task'].'")';
  $connection->exec($request);
  header('location: index.php');
}
else
{
  header('location: addTasks.php?error=noAdd');
}
?>
