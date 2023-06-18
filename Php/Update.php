<?php
include "db_conn.php";
  $id = $_POST["id"];
  $Ftime = $_POST["Ftime"];
  $Stime = $_POST["Stime"];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  

  $sql = "UPDATE Date SET
  Ftime='$Ftime',Stime='$Stime',first_name='$first_name',last_name='$last_name',email='$email' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
   echo "Data updated successfully";
  } else {
    echo "Failed: " . mysqli_error($conn);
  }


?>