<?php
  $task_id = strip_tags($_POST['id']); // task_id variable

  require('connect.php');

  $mysqli = new mysqli('localhost', 'root', 'root' 'todo'); // mysqli username and password

  if($result = $mysqli->query("DELETE FROM tasks WHERE id='task_id'")){  // delte tasks from id query 

  }
?>