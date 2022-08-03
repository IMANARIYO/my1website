
<?php
$server ="localhost";
$user="root";
$pass="";
$db="bpusers1";
$con=mysqli_connect($server,$user,$pass,$db);
if($con){
  echo "byakunze";
}
else{
  echo "Byanze".mysqli_error($con);
}
?>

// <?php
// $server="localhost";
// $user="root";
// $pass="";
// $db="student";
// $con=mysqli_connect($server,$user,$pass,$db);
// if($con){
//     echo "byakunze <br />";
// } else{
//     echo "ntibigerayo".mysqli_error($con);
// }