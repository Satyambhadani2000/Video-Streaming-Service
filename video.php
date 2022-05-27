<?php include("dbcon.php");
if(isset($_POST['submit'])){
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "images/" . $filename;
    move_uploaded_file($tempname, $folder);
    $sql= "INSERT INTO `video`(`name`)VALUES('$folder')";
    if(!mysqli_query($conn,$sql))
    {
        echo "Data not inserted";
    }
    else 
    {
        echo "Data inserted";
    }
}
?>

    <html>
<head>
<style>
    *{
font-family:DokChampa;
font-size:18px;

color:black;
}
body{
background-image:url("images/headback.jpg");
background-size:cover;
padding:379px;
}
</style>
</head>
<body>
<center>

<form enctype="multipart/form-data" method="POST">
<input type = "file" name = "file" id ="file">
    <input type = "submit" name = "submit" value = "submit">
</form>   

</center>
</body>
</html>
 
