<?php

  // Step 1: Retrieve the correct row from the database
  //$conn = mysqli_connect("localhost", "root", null, "comp_1006_midterm");
  $conn = mysqli_connect("172.31.22.43", "PaoHua200453641", "lCMS8F7QXv", "PaoHua200453641");

  $sql = "SELECT * FROM people WHERE id = {$_GET['id']}";
  $result = mysqli_query($conn, $sql);

  //fetch the row
  $row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Edit People</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <header class="rounded-3 my-5 bg-dark p-5">
        <h1 class="text-white">Edit Person</h1>
      </header>

      <p>
        <a href="index.php">Home</a>
      </p>

      <form action="update.php" method="post">
        <!-- Step 2: Add the hidden field with the ID value -->
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        
        <!-- Step 3: Fix the following fields so they display the correct row information as their initial value -->
        <div class="form-group">
          <label>First Name:</label>
          <input class="form-control" type="text" name="first_name" value="<?= $row['first_name'] ?>">
        </div>

        <div class="form-group">
          <label>Last Name:</label>
          <input class="form-control" type="text" name="last_name" value="<?= $row['last_name'] ?>">
        </div>

        <div class="form-group">
          <label>Age:</label>
          <input class="form-control" type="number" name="age" step="1" min="0" value="<?= $row['age'] ?>">
        </div>

        <div class="form-group">
          <label>Biography:</label>
          <textarea class="form-control" name="bio"><?= $row['bio'] ?></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Update</button>
      </form>
    </div>
  </body>
</html>