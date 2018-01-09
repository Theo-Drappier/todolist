<?php
require '../vendor/autoload.php';
use Todo\tools\Connection;

$connection = Connection::getInstance();
$id = $_GET['idTask'];

$request = $connection->prepare('DELETE FROM task WHERE id=:id',
                                  [[':id', $id]]);
$request->execute();
