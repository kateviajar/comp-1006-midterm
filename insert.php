<?php
  
  //$conn = mysqli_connect('localhost', 'root', null, 'comp_1006_midterm');
  $conn = mysqli_connect('172.31.22.43', "PaoHua200453641", "lCMS8F7QXv", "PaoHua200453641");

  // Step 1: Write the correct SQL to insert the form data into the database
  $sql = "INSERT INTO people (
      first_name,
      last_name,
      age,
      bio
    ) VALUES (
      '{$_POST['first_name']}',
      '{$_POST['last_name']}',
      {$_POST['age']},
      '{$_POST['bio']}'
  )";

  $result = mysqli_query($conn, $sql);

  // Step 2: Start the session
  session_start();

  if ($result) {
    $_SESSION["message"] = "The new person was created successfully";
  } else {
    $error = mysqli_error($conn);
    $_SESSION["message"] = "There was an error creating the new person: " . $error;
  }

  // Step 3: Perform a proper redirect to the notification page
  header("Location: notification.php");
  exit;
?>