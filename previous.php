<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Shillong">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
  

  <title>Shillong Teer previous Result</title>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Sans+Pro:ital,wght@0,600;0,700;0,900;1,700&display=swap');
        
*{
    margin: 0px;
    padding: 0px;
    font-family: 'Bebas Neue', sans-serif;
}
        
        .title{
    font-size: 25px;
    text-align: center;
    margin-bottom: 40px;
        }
    h1{
        color:green;
    }
    </style>
    
    
  <div  class="title">Teer Result </div>
  <h1 align="center"> PREVIOUS RESULTS</h1>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    
  <table dir="ltr" border="1" cellspacing="0" cellpadding="0" style="width:100%;"><colgroup><col width="100" /><col width="100" /><col width="100" /><col width="100" /></colgroup>
<tbody>
<tr bgcolor="#408cff">
<td align="center">1st Result</td>
<td align="center">2nd Result</td>
<td align="center">Date</td>
<td align="center">Location</td>
</tr>
    
        <?php
        $sql = "SELECT * FROM `Sheet1`";
        $result = mysqli_query($conn, $sql);
        $num =mysqli_num_rows($result);
        $h= $num+1;
        
        $i =0;
        while ($i<$num) {
            $i++;
            $h--;
$sq = "SELECT * FROM `Sheet1` WHERE id = $h ";
    $resul = mysqli_query($conn, $sq);
    $ro = mysqli_fetch_assoc($resul);
        ?>
        <tr>
    <td align="center"><?php echo $ro["first_name"] ?></td>
    <td align="center"><?php echo $ro["last_name"] ?></td>
    <td align="center"><?php echo $ro["email"] ?></td>
    <td align="center">Shillong</td>
</tr>
       
            
          
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  

  

</body>

</html>
