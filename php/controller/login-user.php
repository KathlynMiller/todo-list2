<?php
   require_once(__DIR__ . "/../model/config.php");

   $array = array( // an array with empty variables
     'exp'=> '',
     'exp1'=> '',
     'exp2'=> '',
     'exp3'=> '',
     'exp4'=> '',
   );

   $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
   $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
   $query = $_SESSION["connection"]->query("SELECT * FROM users WHERE username = '$username'");
   if($query->num_rows == 1) { /* 1 row for query */
   	   $row = $query->fetch_array();

   	   if($row["password"] === crypt($password, $row ["salt"])) {  /*authrnticated session need to be true to make the login successful*/
   	   	    $_SESSION["authenticated"] = true;
                $array["exp"] = $row["exp"];
                $array["exp1"] = $row["exp1"];
                $array["exp2"] = $row["exp2"];
                $array["exp3"] = $row["exp3"];
                $array["exp4"] = $row["exp4"];

            echo json_encode($array);
   	   }
   	   else {
   	   	     echo "<p>Invalid username and password</p>";
   	   }
   }
   else { 
   	  echo "<p>Invalid username and password</p>";
   }