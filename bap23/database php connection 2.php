<?php
require("connection.php"); //allow to access php file
//require_once
//variables

if(isset($_POST["bika"]))
{
    $book_name = $_REQUEST["igitabo"]
  $names = $_REQUEST["amazina"]; //allow access to value name

$salary = $_REQUEST["umushahara"];  //allow access to value salary



  echo "murakoze kubiKa ";
}
 $querry= "INSERT INTO tbl_books(book_name,author,description) VALUES ('$book_name','$names', $salary)";
 //echo querry
 $results = mysqli_query($con,$querry);  //allow access to the databes table

 if($results)
 {
  echo "submitted";
 }
 else{
  echo "something is wrong ".mysqli_error($con);
 }



if(isset($_POST["retr"]))
{
    $querry=" SELECT * FROM ebooks";

    $res= mysqli_query($con,$querry);
    if(  $res)
    while($row=mysqli_fetch_array($res)){    //allow access to the elements in array form

    echo $row['author']."". $row['timestapm'];
   

    {
     echo "byagiyemo";
    }
}
    else{
     echo "byanze ".mysqli_error($con);
    }
   

  echo "Murakoze kubikura";
}
?>
<!DOCTYPE html>
<head><title>HOME</title>
</head>
<body>
<form method="POST" action="">
<label>BOOK NAMES</label><input type="text" name="igitabo" placeholder="andika amazina YIGITABO">
<label>NAMES</label><input type="text" name="amazina" placeholder="andika amazina neza"><br>
<label>salary</label><input type="number" name="umushahara"><br>
<input type="submit" name="bika" value="BIIKA">
<input type="submit" name="retr" value="BIKURA">
</form>



</body>
</html>