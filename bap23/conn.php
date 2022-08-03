<?php
$server ="localhost";
$user="root";
$pass="";
$db="isoko";
$con= mysqli_connect($server ,$user,$pass,$db);

if($con){
  echo "byakunze";
}
else{
  echo "Byanze".mysqli_error($con);
}
?>