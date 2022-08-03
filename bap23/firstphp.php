<!-- <?php
require(firstphp.php)

$name = $_REQUEST["name"];
$salary=$_REQUEST["umushahara"];


$query="INSERT INTO TABLE_NAME(author,description) VALUES ($names,$salary) 

$results=mysqli_query($con,$query)
if($results)
{
    echo"submitted";
}
else
{
    echo"error".mysqli_error($con);
}


?>
<hr />
<html>
<head>
<body>

<form action="firstphp.php" method="post">
<label>name:</label>
 <input type="text" name="name" placeholder="enter both name" name="sub"><br>
 <label>salary:</label> 
 <input type="number" name="umushahara" placeholder="injiza umushahara"><br>
<input type="submit" value="bika" name="sub">
<input type="submit" value="bikura" name="sub">
</form>

</body>
</head>
</html>
