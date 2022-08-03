<?php
require("conn.php");
if(isset($_POST['submit'])){

$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$age=$_REQUEST['age'];
//$sex=$_REQUEST['sex'];
//$date=$_REQUEST['db'];
////$color=$_REQUEST['color'];
//$nation=$_REQUEST['country'];
//$language=$_REQUEST['lang'];
$names=$_REQUEST['names'];
//$district=$_REQUEST['location'];
//$stat=$_REQUEST['stat'];


$querry= "INSERT INTO person(names ,telphone, email, age) VALUES('$names','$phone','$email',  '$age' )";
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
    <title>person infomation</title>

<style>

   .submit
       {background-color: orange;
       color:whitee;
       border:4;
       height:36px;
       width:105px;e
       border-radius:2px;
       cursor:pointer;

      }
   .reset{
       border-color:white;
       border-color:rgb(41,118,211);
       border-style:solid;
       border-width: 1px;
       color:rgb(41,118,211);
       height:36px;
       width:62px;
       border-radius:2px;
       cursor:pointer;
       margin-right:8px;
   }
   
.tweet-button{
   backgrouund-color:rgb(2,158,255);
       border-color:rgb(41,118,211);
       border-style:solid;
       border-width: 1px;
       color:white;
       height:36px;
       width:74px;
       border-radius:18px;
       font-color:blue;
font-weight:bold;
       margin-right:8px;

font-size:15px;


}
body{background-color:cyan;
//background-image:url("car1.jfif");
}
form{border-radius: 1cm;
   border-color: greeen;
   font-style: italic;
 margin-right:8px;

}
       </style></head>
<body>
   <form method="POST" action="person.php">
   <h1> preson  information   form</h1>

   names:
   <br><input type="text"name="names" value="name"required><br>
   telphone:<br><input type="number"value="phone"name="phone"><br>
   email:<br><input type="email"value="email@gmail"class="email" name="email"><br>

   age:
   <br><input type="number"name="age" value="age"><br>
   dateof birth:<br>
   <input type="date"name="db"><br>
   sex:<br>
   male<input type="radio"value="male" name="sex"><br>
   female<input type="radio"value="female"name="sex"><br>
  
   your favorites color:<br>
   <input type="color"value="color"name="color"><br>
   status:<br>
   married<input type="radio"value="married"name="stat"><br>
   single<input type="radio"value="single"name="stat"><br>
   divorced<input type="radio"value="divorced"name="stat">
   <br>nationality:
   <br>RWANDA<input type="radio"value="RWANDA" name="country"><br>
   other:
   <input type="radio"value="OTHER NATIONALITIES"name="country">
<br>
UPLOAD your id:<br>
<input type="file"value="upload file"><br>
languages spoken:<br>english<input type="checkbox" value="english"name="lang"><br><br>
kinyarwanda<input type="checkbox" value="kinyaranda"name="lang">
<br>
french<input type="checkbox"value="frnch" name="lang"><br><br>
kiswahili<input type="checkbox" value="kiswahili" name="lang"><br>
kirundi<input type="checkbox"  value="kiru"name="lang"><br>
<br><label for="location">district</label> 
<select name="location" id="akarere" direction="left">
    
    <option value="nyamagabe">nyamagabe</option>
    <option value="nyabihu">nyabihu</option>
    <option value="nyaruguru">nyaruguru</option>
    <option value="nyarunge">nyaruguru</option>
    <option value="nyamasheke">nyamasheke</option>
    <option value="nyabihu">nyabihu</option>
    <option value="gasabo">gasabo</option>
    <option value="  kamonyi  ">  kamonyi     </option>
    <option value=" musanze   ">   musanze    </option>
    <option value="  karongi  ">     karongi </option>
    <option value="  rubavu  ">  rubavu     </option>
    <option value="  rusizi  ">  rusizi     </option>
    <option value="  gatsibo  ">    gatsibo   </option>
    <option value="  huye  ">    huye   </option>
    <option value="  nyanza  ">   nyanza    </option>
    <option value="   ruhango ">  ruhango     </option>
    <option value=" MUHANNGA   ">    MUHANNGA   </option>
    <option value=" kayonza  ">     KAYONZA  </option>
    <option value="  kirehe ">kirehe   </option>
    <option value="  nyagatare  ">    ntagatere   </option>
    <option value="   gisagara ">    gisgara   </option>
    <option value="  kicukiro  "> kicukiro      </option>
    <option value=" gicumbi   "> gicumbi      </option>
 <option value="rwamagana">rwamagana</option>
 <option value="kicukiro">kicukiro</option>
 <option value="ruhango">ruhango</option>
 <option value="gasabo">gasabo</option>
 <option value="ngoma">ngoma</option>
 <option value="ngororero">ngororero</option>
 <option value="burera">burera</option>
 
</select> <br>
<input type="submit"name="submit" value="submit"class="submit"> 
<input type="reset"value="reset"class="reset" > <br>
<label><a href="product .html" target="_blank">go back to product</a></label><br>
</form>
   
</body>
</html>

