<?php
require '../vendor/autoload.php';
use Todo\tools\Connection;

$connection = Connection::getInstance();
$id = $_POST['idTask'];

$request = 'DELETE FROM task WHERE id='.$id;
$connection->exec($request);
