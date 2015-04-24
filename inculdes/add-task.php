<?php
 $task=  $time = strip_tags($_POST['task']);
 $date = date('Y-m-d'); // date variable
 $time = date('H:i:s'); // time variable

 include("connect.php"); // adding connect.php file
 $mysqli = new mysqli('localhost', 'root', 'root', 'todo');

 $mysqli ->query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");

 $query = " SELECT = FROM tasks WHERE task='$task' and date='$date' and time='$time'";

 if($result = $mysqli->query($query)){
 	while($row = $result->fetch_assoct()){
 		$task_id = $row['id'];
 		$task_name = $row['task'];
 	}
 }

 $myqli->closet();

 echo '<li><span>'.$task_name.'</span><img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';

?>