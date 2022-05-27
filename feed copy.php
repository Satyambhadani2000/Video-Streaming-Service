<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","","mytube");

$f=$_POST['firstname'];
$n=$_POST['lastname'];
$cn=$_POST['channel_name'];
$e=$_POST['mailid'];
$ph=$_POST['contact'];
$fb=$_POST['address'];

$sql="insert into creator(firstname,lastname,channel_name,mail_id,contact,address) values('$f','$n','$cn','$e','$ph','$fb')";
if(!(mysqli_query($con,$sql))){
echo mysqli_error($con);
}
}
?>

<!DOCTYPE html>    
<html>    
<head>    
   
<style>    
* {    
  box-sizing: border-box;    
}     
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid black;   
  border-radius: 4px;         
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid black;    
  border-radius: 4px;      
}      
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}     
input[type=submit] {    
  background-color: grey;
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}      
input[type=submit]:hover {    
  background-color: #45a049;    
}       
.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 20px;    
}    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}      
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}      
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}    

</style>    
</head>    
<body>    
<h2>CREATOR DETAILS</h2>    
<div class="container">    
  <form method="post">    
    <div class="row">    
      <div class="col-25">    
        <label for="fname">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="firstname" placeholder="Your name..">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">Last Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">    
      </div> 
</div>
      <div class="row"> 
      <div class="col-25">    
        <label for="cname">Channel Name</label>    
      </div>   
      <div class="col-75">    
        <input type="text" id="chname" name="channel_name" placeholder="Enter your channel name">    
      </div> 
</div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="mailid" placeholder="Your mail id..">    
        </div>    
      </div> 
      <div class="row">    
        <div class="col-25">    
          <label for="contact">Contact number</label>    
        </div>         
      <div class="col-75">    
        <input type="text" id="phnumber" name="contact" placeholder="Your contact number">    
      </div> 
</div> 
      <div class="row">    
        <div class="col-25">    
          <label for="address">Address</label>    
        </div>  
      <div class="col-75">    
        <input type="text" id="address" name="address" placeholder="Your Address">    
      </div>   
    <div class="row">    
      <input type="submit" value="Submit" name="submit">    
    </div>    
  </form>    
</div>    
</body>    
</html>