<?php
  require 'class/Connection.php';
  $connection = Connection::getInstance();
  $tasks = $connection->request('SELECT * FROM task');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>To Do List</title>
    <meta charset="utf-8"/>
    <link href="lib/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1>To Do List</h1>
      <hr />
      <a href="addTasks.php"><button>Add a new task</button></a>
      <h2>Your tasks</h2>
      <table class="table">
        <thead>
          <th></th>
          <th>Done?</th>
          <th>Delete</th>
        </thead>
        <tbody>
          <?php foreach($tasks as $task): ?>
            <tr>
              <td class="text-table">
                <?php if($task['state'] == 1): ?>
                  <strike>
                <?php endif ?>
                <?= $task['action'] ?>
                <?php if($task['state'] == 1): ?>
                  </strike>
                <?php endif ?>
              </td>
              <form action="update.php" method="POST">
                <input type="hidden" name="idTask" value="<?= $task['id'] ?>" />
                <input type="hidden" name="state" value="<?= $task['state'] ?>" />
                <td class="button-table">
                  <input type="submit" name="submitState" value="O" />
                </td>
                <td class="button-table">
                  <input type="submit" name="submitDel" value="X" />
                </td>
              </form>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
