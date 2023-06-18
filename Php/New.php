<?php
include "db_conn.php";


 $sql = "SELECT * FROM `Sheet1`";
    $result = mysqli_query($conn, $sql);
    $json_array = array();
    while($row = mysqli_fetch_assoc($result)){
   $json_array[] = $row;
    }
   print(json_encode($json_array));

?>