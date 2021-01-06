<?php
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
}

$nameerr=$emailerr=$phoneerr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameerr = "Name is required";
  } else {
    if (!preg_match("/^[a-zA-Z\s]*$/",$name)) {
      $nameerr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailerr = "Email is required";
  } else {
    if (!preg_match("/^([A-Za-z0-9_\.]+)@([a-z]+)\.+[a-z]{2,6}$/", $email)) {
      $emailerr = "Invalid email format";
    }
  }
   
  if (empty($_POST["phone"])) {
    $phoneerr = "Phone is required";
  } else {
    if (!preg_match("/^[0-9]*$/",$phone)) {
      $phoneerr = "Only numbers allowed";
    }
  }
}
$con=mysqli_connect("localhost","root","","deets");

if(!$con){
	die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["submit"]) && $nameerr=="" && $emailerr=="" && $phoneerr==""){
{
	$q="INSERT INTO detail(NAME,EMAIL,PHONE) VALUES ('$name','$email',$phone)";

if (mysqli_query($con, $q)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $q . "<br>" . mysqli_error($con);
}
}}
mysqli_close($con);
?>

<!-- 
ALL REGEX

NAME /^([a-zA-z\s]*)$/

USERNAME /^([a-zA-Z0-9]+)$/

PASSWORD /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})"/

PHONE /^([[+0-9]{13}+)$/

EMAIL /^([a-zA-Z0-9$#%^&]+)@([a-z]+)\.([a-z]{2,5}+)$^([a-zA-Z0-9$#%^&]+)@([a-z]+)\.([a-z]{2,5}+)$/

URL/WEBSITE /^(https:\\\\www\.)([a-zA-Z0-9$#%^&]+)\.([a-z]{2,5}+)$/

DATE /^([0-9]{2}+)-([0-9]{2}+)-([0-9]{4}+)$/

DATE (MUST BE 1YYYor2YYY) /^([0-9]{2}+)-([a-z]{3}+)-(2|1)([0-9]{3}+)$/

-->


<!DOCTYPE html>
<html>
<head>
	<title>
		FORM
	</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
<p><span class="error">* required field</span></p>
<form method="post"	>  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameerr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailerr;?></span>
  <br><br>
  Phone: <input type="text" name="phone" >
  <span class="error">* <?php echo $phoneerr;?></span>
  <br><br>
  <input type="submit" name="submit">
</body>
</html>