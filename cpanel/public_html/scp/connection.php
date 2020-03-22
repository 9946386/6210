<?php

    //Database credentials
    $user = "a9946386_user";
    $password = "archieandmax09";
    $dbname = "a9946386_scp";

    //Create connection object
    $connection = new mysqli('localhost', $user, $password, $dbname) or die(mysqli_error($connection));

    //Grab data from the database 
    $result = $connection->query("select * from subject") or die($connection->error());

?>