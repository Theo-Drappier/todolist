<?php
require '../vendor/autoload.php';

use Todo\tools\Connection;

$connection = Connection::getInstance();

$request = 'INSERT INTO task (action) VALUES ("'.$_POST['task'].'")';
$connection->exec($request);
