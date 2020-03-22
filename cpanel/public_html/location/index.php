<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Location App</title>
  </head>
  <body class="container">
    <br><h1>Location App</h1><br>

    <?php include 'data.php'; ?>

    <div class="form-group">
        <form action="data.php" method="POST">
            <label>Name:</label>
            <br>
            <input type="text" name="name" placeholder="Your Name Here.." required class="form-control">
            <br><br>

            <label>Location:</label>
            <br>
            <input type="text" name="location" placeholder="Your Location Here.." required class="form-control">
            <br><br>

            <button type="submit" class="btn btn-primary">Submit Data</button>        
            
        </form>
        
        <hr width="75%"> 
        <h2>Location of Users</h2>
        <table class="table">

          <thead>
            <tr>
              <th>User</th>
              <th>Location</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>

          <?php 
            while($row = $result->fetch_assoc()):
          ?>

          <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['location']?></td>
            <td>
              <a href="data.php?delete=<?php echo $row['id']; ?>" class="btn btn-info">Delete</a>          
            </td>
          </tr>   
          <?php endwhile; ?>

        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>