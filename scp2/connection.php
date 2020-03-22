<?php

    // Create database credential variables
    $user = "a9946386_user";
    $password = "archieandmax09";
    $db = "a9946386_scp";

    // Create php db connection object
    $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

    // Get all data from the table and save in a variable for use on our page application
    $result = $connection->query("select * from subject") or die($connection->error());
    
?>