<?php 
//Why is this important? Why does loclahost habe to be first?
$mysqli = new mysqli('losthost', 'root', 'root', 'tasks'); 
//$mysqli->connect_error then we want it to die and have message
if ($mysqli->connect_error){
    die('Connect Error (' . $mysqli->connect_errno .')'
      . $mysqli->error);
}
else{
  echo "Connection made"; // echoing connection made
}
$mysqli->close();

?> 
