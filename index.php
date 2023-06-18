
<?php
include "db_conn.php";
$id = 2;

  $sql = "SELECT * FROM `Date` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);  
    $state = 'Shillong Teer Result';
?>

<?php

if (isset($_POST["kanapara"])) {
    
    include "db_conn.php";
$id = 1;

  $sql = "SELECT * FROM `Date` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 
    $state = 'Kanapara Teer Result';
}
?>

<?php

if (isset($_POST["shillong"])) {
    
    include "db_conn.php";
$id = 2;

  $sql = "SELECT * FROM `Date` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 
    $state = 'Shillong Teer Result';
}
?>

<?php

if (isset($_POST["juwai"])) {
    
    include "db_conn.php";
$id = 3;

  $sql = "SELECT * FROM `Date` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 
    $state = 'juwai Teer Result';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" Shillong Teer result is a allow game play everyday in a week except Sunday.Teer result come daily basis First Round and Second Round at 4:00 pm and 4:50 pm respectively time can be change summer and winter.Shillong Teer most play at Meghalaya,Assam,Nepal,Bangladesh mostly hills area.">
    <meta name="keywords" content=" shillong teer result today,shillong teer result list,Teer result today,Shillong Teer result,Teer result,Teer,Today Teer result">
    <link rel="stylesheet" href="css/hello.css">
    <title>shillong teer result || teer result || shillong teer || shillong teer result today



</title>
</head>
<body>
    <div  class="title"><a style="text-decoration:none;" href="index.php"> Shillong Teer</a>
 </div>
    
        
        <form action="" method="post" class="button">
        
        <button  name="kanapara"  class="BT1">Kanapara</button>
        <button name="shillong"  class="BT1">Shillong</button>
        <button name="juwai"  class="BT1">  Juwai  </button>
        </form>
    
    <div class="main">
        <div id="state_name"><?= $state ?></div>
        <div id="date">
           <?php echo $row['email'] ?> 
        </div>
        <div class="frs">
            <div id="Fr" class="ma"><?php echo $row['Ftime'] ?>]</div>
             <div id="Sr" class="ma"><?php echo $row['Stime'] ?>]</div>
        </div>
        <div class="num">
            <div id="fn" class="number">
                <!-- 1st result -->
                
                <?php echo $row['first_name'] ?> 
                
                </div>
             <div id="sn" class="number">
                 <!-- 2nd result -->
                 
                <?php echo $row['last_name'] ?>                  
                 
                 </div>
        </div>
        </div>
        <div class="image">
           <a href="previous.php" >
               <img class="ima" src="image/one.jpg" alt="Teer previous result" ></a>
             <a href="Common_number.html" >
                 <img class="ima" src="image/two.jpg" alt=""></a>
         <a href="prediction.html" >
                <img class="ima" src="image/three.jpg" alt=""></a>
            
        </div>
        
        <div class="image">
        <a href="teercalander.html" >
                <img class="ima" src="image/four.jpg" alt=""></</a>
           <a href="dream.html" >
                <img class="ima" src="image/five.jpg" alt=""></a>
         <a href="number.html" >
                <img class="ima" src="image/six.jpg" alt=""></a>
            
        </div>
        <div class="art">
           <strong> Shillong Teer result </strong> is a allow game play everyday in a week except Sunday.<strong>Teer result</strong> come daily basis First Round and Second Round at 4:00 pm and 4:50 pm respectively time can be change summer and winter.<strong>Shillong Teer</strong> most play at Meghalaya,Assam,Nepal,Bangladesh mostly hills area.
        </div>
        <div class="last">
            <a href="#">About us</a>
            <a href="#">Contact us</a>
            <a href="#">private policy</a>
        </div>
    
    



</body>
</html>
