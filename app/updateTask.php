<?php
require '../vendor/autoload.php';
use Todo\tools\Connection;

$connection = Connection::getInstance();
$id = $_POST['idTask'];

$newState = (int)!$_POST['state'];
$request = 'UPDATE task SET state='.$newState.' WHERE id='.$id;
$connection->exec($request);
