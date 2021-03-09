<?php
  
  // Step 1: Connect to the MySQL database and
  // retrieve all the people rows
  //$conn = mysqli_connect("localhost", "root", null, "comp_1006_midterm");
  $conn = mysqli_connect('172.31.22.43', "PaoHua200453641", "lCMS8F7QXv", "PaoHua200453641");

  $sql = "SELECT * FROM people";
  $result = mysqli_query($conn, $sql);

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>COMP 1006 Midterm</title>
  </head>

  <body>
    <div class="container">
      <header class="rounded-3 my-5 bg-dark p-5">
        <h1 class="text-white">COMP 1006 Midterm</h1>
      </header>

      <p>
        <a href="create.php">Create New Person</a>
      </p>

      <table class="table table-striped table-bordered my-5">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Biography</th>
            <th>Actions</th>
          </tr>
        </thead>

        <!-- Step 2: Fix the logic below to show all the people rows -->
        <tbody>
          <?php foreach ($rows as $row): ?>
            <tr>
              <td><?= $row['first_name'] ?></td>
              <td><?= $row['last_name'] ?></td>
              <td><?= $row['age'] ?></td>
              <td><?= $row['bio'] ?></td>
              <!-- Step 3: Fix the links below to point to the edit and delete pages passing the id as a part of the query string -->
              <td>
                <a href="./edit.php?id=<?= $row['id'] ?>">edit</a>
                |
                <a href="./delete.php?id=<?= $row['id'] ?>" onClick="return confirm('Are you sure?')">delete</a>
              </td>
            </tr>
          <?php endforeach  ?>
        </tbody>
      </table>
    </div>
  </body>
</html>