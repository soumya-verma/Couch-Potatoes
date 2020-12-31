<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="loginstyle.css" integrity="">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Couch Potatoes Seller Login</title>
</head>
<?php
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];

?>
<script type="text/javascript">
	function validate1()
	{
		var x=document.myform.username.value;
		if(x=="")
		{
			document.getElementById("nameErr").innerHTML="Username is required!!!";
			return false;
		}
		else if(x.match(/[a-z]/g) && x.match(/[A-Z]/g) && x.match(/[0-9]/g))
			return true;
		else
		{
			document.getElementById("nameErr").innerHTML="Enter a valid username!!!";
			return false;
		}
	}
	function validate2()
	{
		var y=document.myform.pass.value;
		if(y=="")
		{
			document.getElementById("passErr").innerHTML="Password is required!!!";
			return false;
		}
		else if(y.match(/[a-z]/g) && y.match(/[A-Z]/g) && y.match(/[0-9]/g) && y.length>=6 && y.length<=20)
			return true;
		else
		{
			document.getElementById("passErr").innerHTML="Enter a valid password!!!";
			return false;
		}
	}
	function validate()
	{
		return (validate1()+validate2());
	}
</script>
<body>
	<div name="a1" class="bgimage">
		<div class="top clearfix">
			<img class="img" src="images/couchpotatoes.jpg" height="120" width="120" alt="couch potatoes logo">
			<p class="cptop"><b>Couch Potatoes</b></p>
		</div>
		<nav>
			<ul id="navig" class="navig" style="background:black;">
				<li>THE ONLINE FURNITURE STORE</li>
			</ul>
		</nav>
		<div name="a2" class="hello">
			<div name="a3" class="div">
				<form class="form" name="myform">
					<p class="al">SELLER LOGIN</p>
					<p class="field">USERNAME <span class="error" id="nameErr">*</span></p>
					<input class="text" type="text" name="username">
					<p class="field">PASSWORD <span class="error" id="passErr">*</span></p>
					<input class="text" type="password" name="pass">
					<div class="login">
						<button class="loginbut" onclick="return validate()">Login</button>
					</div>
					<p class="new">Are you a new user? <button class="signupbtn" formaction="couchpotatoessellersignup.html">SIGNUP</button></p>
				</form>
			</div>
	    </div>
	</div>
</body>
</html>
