<?php

$con = mysqli_connect('localhost','root','','ISOKO');
// if($con){echo "conection succes";

  $fname=$_REQUEST['firstname'];
  $lname=$_REQUEST['lastname'];
  $suggest=$_REQUEST['subject'];
  $loc=$_REQUEST['location'];

  $query="INSERT INTO contactus(fname,lname,suggest,location) VALUES ('$fname','$lname',' $suggest',' $loc') ";
 
  $result=mysqli_query($con,$query);
  echo $result;
  if($result){
          echo "submitted";  
        }
        else{
        echo "unisubmitted -".mysqli_error($con);
        }
?>