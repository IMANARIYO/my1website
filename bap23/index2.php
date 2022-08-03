<?php
$greeting ="welcome to server";
echo $greeting ;
$names =" MUHAYIMANA Ambroise";
$wage = 20.000;
$weight = 60;
$total =$weight * $wage;
echo "<br>";

if ($total > 2000) {
    echo $greeting. " " .$names. "with total:" .$total ;
}
else {
   for ($i=0; $i < 1; $i++) { 
    echo  "salary is to small </br>";
}

} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php now</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="names" placeholder="enter name"><br>
    <br>
    <input type="submit" value="send" name="send" placeholder="enter amount here"><br>
    <br>
    <input type="submit" value="withdraw" name="withdraw" placeholder="enter amount to withdraw"><br>
</form>    
</body>
</html>