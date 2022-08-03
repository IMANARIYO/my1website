<?php  // display details
require(serv.php)
echo"<h1>book_name</h1>";
//echo"$GET_['$book_name'];
$QUERY="SELECT * FROM tbl_books WHERE book_name=web technology";
$querry=" SELECT * FROM ebooks";

$res= mysqli_query($con,$querry);
if($res){
while($row=mysqli_fetch_array($res)){    //allow access to the elements in array form

echo "<br>id:.$row ['book_id'].<br>book_name:.$row ['book_name'].<br>author:.$row ['author'].
}
}
?>