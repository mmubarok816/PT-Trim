<?php
include "db_conn.php";
$id = $_POST["id"];

$sql = "SELECT * FROM `Date` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
   $json_array = $row;
    
   print(json_encode($json_array));


?>