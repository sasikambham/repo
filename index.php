
<?php
$servername="localhost";
$username="root";
$password="";
$database="";
$con=mysqli_connect($servername,$username,$password,$database);


if (!$con) {
  die("error".mysql_connect($con));
  // code...
}
else{

  echo "connection stable";
  }
?>