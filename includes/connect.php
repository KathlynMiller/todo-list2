<?php 
//Why is this important? Why does loclahost have to be first?
$mysqli = new mysqli('localhost', 'root', 'root', 'todo'); 
//$mysqli->connect_error then we want it to die and have message
if ($mysqli->connect_error){
    die('Connect Error (' . $mysqli->connect_errno .')'
      . $mysqli->connect_errno);
}
else{
  // echo "Connection made"; 
}
$mysqli->close();

?> 
