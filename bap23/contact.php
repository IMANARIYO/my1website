
 <?php
require("conn.php");
if(isset($_request['Submit'])){
  $fname=$_post["firstname"];
  $lname=$_post["lastname"];
  $suggest=$_post["subject"];
  $loc=$_post["location"];
  
  $query="  INSERT INTO `contactus` (`fname`, `lname`, `suggest`, `location`)VALUES ('$fname','$lname','$suggest','$loc') ";       
  $result=mysqli_query($con,$query);
  if($result){
          echo "submitted";  
        }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
  </style>
</head>
<body> 
  <form action="contact.php"method="POST">
  <div class="container">
    <div style="text-align:center">
    
      <h2>Contact Us</h2>
      <p>Swing by for a cup of coffee, or leave us a message:</p>
    </div>
    <div class="row">
      <div class="column">
        <img src="car1.jfif" style="width:100%">
      </div>
      <div class="column">
       
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
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
            <option value=" KAYONZA   ">     KAYONZA  </option>
            <option value="   KIREHE ">  KIREHE     </option>
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
         <option value="burera"><a href="signup.html"target="_blank">sign up</a><br></option>
         
          
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Write something.." style="height:170px">
          <input type="submit" name="Submit" value="Submit">
        
      </div>
    </div>
  </div>

  </form>
</body>
</html>