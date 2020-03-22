<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SCP - Subject Files</title>
  </head>
  <body class="container">

  <?php include 'connection.php'; ?>

    <h1>SCP - Subject Files</h1>

    <!-- Menu Row -->
    <div class="row">
        <div class="col">

            <ul class="nav">
                <?php foreach($result as $menu_item): ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?subject='<?php echo $menu_item['item_no']; ?>'">
                            <?php echo $menu_item['item_no']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>            
            </ul>
        
        </div>    
    </div>

    <!-- Display record div below -->
    <div class="row">
        <div class="col">

            <?php 
                // Check if subject get value exits
                if(isset($_GET['subject']))
                {
                    // Remove single quotes from subject get value
                    $item_number = trim($_GET['subject'], "'");

                    // Run sql command to select record based on get value
                    $record = $connection->query("select * from subject where item_no='$item_number'") or die($connection->error());

                    // Convert $record into an array for us to echo out on screen
                    $row = $record->fetch_assoc(); 

                    $item = $row['item_no'];
                    $object_class = $row['object_class'];
                    $procedures = $row['procedures']; 
                    $description = $row['description'];
                    $reference = $row['reference'];  
                    
                    // Strip out \n and replace with linebreaks
                    $procedures = str_replace('\n', '<br><br>', $procedures);
                    $description = str_replace('\n', '<br><br>', $description);
                    $reference = str_replace('\n', '<br><br>', $reference);

                    // Display db subject record to screen
                    echo "<h2>Item_# {$item}</h2>
                         <h3>{$object_class}</h3>
                         <h3>Procedures</h3>
                         <p>{$procedures}</p>
                         <h3>Description</h3>
                         <p>{$description}</p>";
                }
            ?>              

        </div>    
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
