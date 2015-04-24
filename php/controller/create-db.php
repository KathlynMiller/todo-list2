<?php
    require_once(__DIR__ . "/../model/config.php");
    $query = $_SESSION["connection"]->query("CREATE TABLE posts(" /* creating table posts in query variable                                                                                                                      i*/
      . "id int(11) NOT NULL AUTO_INCREMENT," 
      . "title varchar(255) NOT NULL," 
      . "post text NOT NULL,"
      . "DateTime datetime NOT NULL ,"
      . "PRIMARY KEY (id))");
    if($query) {
      echo "Successfully created table: posts"; /* This echo only appears once in your php*/
    }
    else {
      echo "<p>" . $_SESSION["connection"]->error . "</p>";  /*paragraph tags in echo */
    }
    $query = $_SESSION["connection"]->query("CREATE TABLE users (" /* making a table for query variable and session */
      . "id int(11) NOT NULL AUTO_INCREMENT,"
      . "username varchar(30) NOT NULL," /*username characters are 30 and cannot be NULL*/
      . "email varchar(50) NOT NULL,"    /* email charaters are 50 and cannot be NULL */
      . "password char(128) NOT NULL," /*password haracters are 128 and cannot be NULL */
      . "salt char(128) NOT NULL," /* sa;t characters are 128 and cannot be NULL*/
      . "PRIMARY KEY (id))");  /* primary key needed*/
    if($query) {
        echo "<p>Successfully created table: users</p>"; /*using paragraph tag to say that our table has beee created successfully*/
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }