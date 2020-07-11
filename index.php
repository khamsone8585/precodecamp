<?php
$servername = "localhost";
$username = "root";
$password = "khamsone";
$database = "con1";
// Create connection
$obj_con = mysqli_connect($servername,$username,$password,$database);
// Check connection
if(!$obj_con){
  header("location:error.php");
  exit();
}else{
  echo "Yes";
}
//query
mysqli_query($obj_con,"SET NAMES UTF8");
$str_sql = "Select * from con1";
$obj_rs = mysqli_query($obj_con,$str_sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php while ($obj_row = (mysqli_fetch_array($obj_rs)){;?>
</body>
</html>