<?php
require '../vendor/autoload.php';
use Todo\tools\Connection;

$connection = Connection::getInstance();
$id = $_POST['idTask'];

if(isset($_POST['submitState'])) {
  $newState = (int)!$_POST['state'];
  $request = 'UPDATE task SET state='.$newState.' WHERE id='.$id;
  $connection->exec($request);
}else if(isset($_POST['submitDel'])) {
  $request = 'DELETE FROM task WHERE id='.$id;
  $connection->exec($request);
}

header('Location: ../web');
?>
