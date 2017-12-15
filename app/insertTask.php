<?php
require '../vendor/autoload.php';
use Todo\tools\Connection;

$connection = Connection::getInstance();

$task = $_POST['task'];
$request = $connection->prepare('INSERT INTO task (action) VALUES (:task)',
                                  [[':task', $task]]);
$request->execute();
