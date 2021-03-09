<?php

  //$conn = mysqli_connect("localhost", "root", null, "comp_1006_midterm");
  $conn = mysqli_connect('172.31.22.43', "PaoHua200453641", "lCMS8F7QXv", "PaoHua200453641");
  
  // Step 1: Write the proper SQL statement to update the record in the database
  $sql = "UPDATE people SET
      first_name = '{$_POST['first_name']}',
      last_name = '{$_POST['last_name']}',
      age = {$_POST['age']},
      bio = '{$_POST['bio']}'
    WHERE id = {$_POST['id']}";

  $result = mysqli_query($conn, $sql);

  session_start();
  if ($result) {
    $_SESSION["message"] = "The person was updated successfully.";
  } else {
    $_SESSION["message"] = "There was an error updating the record: " . mysqli_error($conn);
  }

  header("Location: notification.php");
  exit();

?>