<?php
require("connection.php");
$greetings = "Welcome from WebServer!<br/>";

if(isset($_POST['sub'])){
$names = $_REQUEST["Amazina"];
$wages = $_REQUEST["umushahara"];

$query ="INSERT INTO student(names, salary) VALUES('$names', $wages)";

$rs = mysqli_query($con, $query);
if($rs){
    echo "Byamaze kujyamo";
}
else{
    echo" Hari ikibazo cyavutse".mysqli_error($con);
}

$days = 60;
$total =$wages * $days;

}

if(isset($_POST['ret'])){
    $query ="SELECT * FROM student";

    $re = mysqli_query($con, $query);

    if($re){
        while($row=mysqli_fetch_array($re)){
            echo $row["id"]." ".$row["names"]." |MORE| Edit| <br/>";
        }
    }else{
        echo "Wrong query".mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form  method="post">
        <label for="names">Names: </label>
        <input type="text" name="Amazina" ><br/>
        <label for="">Salary</label>
        <input type="text" name="umushahara"><br/>
        <input type="submit" value="bika" name="sub">
        <input type="submit" value="bikura" name="ret">

    </form>
</body>
</html>