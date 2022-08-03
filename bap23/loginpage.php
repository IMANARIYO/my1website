<?php
$con = mysqli_connect('localhost','root','','ISOKO');
if(isset($_POST['submit'])){

$email=$_REQUEST['email'];
$pass= $_REQUEST['password'];
$querry= "INSERT INTO LOGIN(email,password) VALUES('$email','$pass')";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <style>
    .button{align-self: center;
        border: radius 9px;
    color:bleu;
    font-weight: bolder;
 font-size:16px;
greenfont-color:blue;
font-style:inherit;
   }
   .button1{
       border-radius: 24px;
       text-align: center;
margin: 4px 2px;
font-weight: bolder;
background-image: url("house.jpg");
   }
   body{font-size: 30px;
    font-weight: bolder;
    font-style: oblique;
    color: brown;
       background-color: cyan;
       align-items: center;
       forced-color-adjust: green;
   }
    </style>
</head>
<body>
   <form method="POST" action="loginpage.php">
   <h1>mura kaza neza  kuri ibikenewe niribiri ku isoko  website</h1>
    <label>email:</label><br>
    <input type="email"name="email"id="email"required><br>
    <label>password:</label>
    <input type="password" name="password"required>
    <br>
    <input type="submit" name="submit" class="button"value="login">
     <input type="button"class="button1"value="dont have acount?"><a href="signup.php"target="_blank">sign up</a><br>
    <input type="button"class="button1"value="forgot your password?">
</form>
    
</body>
</html>
