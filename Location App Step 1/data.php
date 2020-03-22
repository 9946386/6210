<?php

    // create connection object/variable to store our database connection (db_address, username, password, db name)
    // creat your database and replace credentials with your own
    $conn = new mysqli('localhost', 'scp_admin', '123456', 'place') or die(mysqli_error($conn));

    // check if data has been sent (isset) from form (index.php) via post, if so, create query to insert data into DB
    if(isset($_POST['name']))
    {
        // if data exists, create variables from posted data
        $name = $_POST['name'];
        $location = $_POST['location'];

        // Then insert data into database
        $conn->query("insert into location(name, location) values('$name', '$location')") or die($conn->error);

        // redirect to form page
        header("Location: index.php");
    }

?>