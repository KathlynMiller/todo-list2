<?php
 $task=  $time =strip_tags($_POST['task']);
 $date = date('Y-m-d'); // date variable
 $time = date('H:i:s'); // time variable
 include("connect.php"); // adding connect.php file
 $mysqli = new mysqli('localhost', 'root', 'root', 'todo');
 $mysqli ->query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");
 $query = " SELECT = FROM tasks WHERE task='$task' and date='$date' and time='$time'";
?>