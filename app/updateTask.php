<?php
require '../vendor/autoload.php';
use Todo\tools\Connection;

$connection = Connection::getInstance();
$id = $_POST['idTask'];
$newState = (int)!$_POST['state'];

$request = $connection->prepare('UPDATE task SET state=:state WHERE id=:id',
                                  [[':state', $newState], ['id', $id]]);
$request->execute();
