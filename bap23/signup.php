<?php
$con = mysqli_connect('localhost','root','','ISOKO');
if(isset($_POST['submit'])){

    $fname=$_REQUEST['fname'];
    $sname=$_REQUEST['sname'];
    $telphone=$_REQUEST['telphone'];
$email=$_REQUEST['email'];
$pass= $_REQUEST['password'];
$rpass= $_REQUEST['rpassword'];
$querry= "INSERT INTO SIGNUP(fname,sname,telphone,email,password,rpassword) VALUES('$fname','$sname',$telphone,'$email','$pass','$rpass')";
$result=mysqli_query($con,$querry);
if($result){
        echo "submitted";  
      }
      else{
      echo "unisubmitted -".mysqli_error($con);
      }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"  namecontent="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <style>
        body{background-color:cyan;
            font-size: large;
            font-style: oblique;
font-weight: bolder ;
  background-image:url("penguins.jpg");
}
        </style>
</head >
<body >
    <form action="signup.php" method="post">
        
    <label>first name:</label><br>
        <input type="text" name="fname"required><br>
    <label>second name:</label><br>
   
    <input type ="sname"  name="sname"required><br>
     <label> telphone number:</label><br> <input type="number" name="telphone"required><br>
        <label>enter a valid email:</label><br>
        <input type="email" name="email"required><br>
    <label>create a strong password:</label><br>
    <input type="password" name="password" required><br>
    <label>re type your password:</label><br>
    <input type="password" name="rpassword" required><br>
    <input type="submit" name="submit" value="submit">
    <br>
    <input type="submit" name="ret" value="ret">
</form>
</body>
</html>