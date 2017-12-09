<?php
  require 'class/Connection.php';
  $connection = Connection::getInstance();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>Add a task</title>
    <meta charset="utf-8"/>
    <link href="lib/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1>To Do List</h1>
      <hr />
      <h2>Add a task</h2>
      <?php if(isset($_GET['error'])): ?>
        <p style="color: red">Veuillez saisir un nom pour votre tâche.</p>
      <?php endif ?>
      <form method="POST" action="insertTask.php">
        <input name="task" placeholder="Name task" type="text"/>
        <input type="submit" value="Envoyer"/>
      </form>
    </div>
  </body>
</html>
