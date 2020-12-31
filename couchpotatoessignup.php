<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="signupstyle.css" integrity="">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Couch Potatoes Signup</title>
</head>
<?php
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['state']=$_POST['state'];
$_SESSION['city']=$_POST['city'];
$_SESSION['loc']=$_POST['loc'];

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
	function validate3()
	{
		var s=document.myform.email.value;
		atpos = s.indexOf("@"); 
		dotpos = s.lastIndexOf("."); 
		if (s==null||atpos < 1 || ( dotpos - atpos < 2 )||dotpos==(s.length-1) )
		{ 
			document.getElementById("mailErr").innerHTML="Enter a valid email id!!!";
			return false ; 
		} 
		else
			return true ; 
	}
	function validate4()
	{
		var a=document.myform.phone.value;
		if(isNaN(a) || a.length!=10)
			{
				document.getElementById("phnErr").innerHTML="Enter a valid phone number!!!";
				return false;
			}
		else
			return true;
	}
</script>
<body>
	<div class="bgimage">
	<div class="top clearfix">
		<img class="img" src="images/couchpotatoes.jpg" height="120" width="120" alt="couch potatoes logo">
		<p class="cptop"><b>Couch Potatoes</b></p>
	</div>
		<nav>
			<ul id="navig" class="navig" style="background:black;">
				<li>THE ONLINE FURNITURE STORE</li>
			</ul>
		</nav>
		<div class="hello">
		<div class="div">
			<form class="form" name="myform">
				<p class="al">ACCOUNT SIGNUP</p>
				<p class="field">USERNAME <span class="error" id="nameErr">*</span></p>
				<input class="text" type="text" name="username">
				<p class="field">EMAIL ID <span class="error" id="mailErr">*</span></p>
				<input class="text" type="text" name="email">
				<p class="field">PHONE NO. <span class="error" id="phnErr">*</span></p>
				<input class="text" type="text" name="phone">
				<p class="field">STATE <span class="error" id="addrErr">*</span></p>
				<select class="text2" name="state">
					<option value="ap">Andhra Pradesh</option>
					<option value="arp">Arunachal Pradesh</option>
					<option value="ass">Assam</option>
					<option value="bih">Bihar</option>
					<option value="chd">Chandigarh</option>
					<option value="cht">Chhatisgarh</option>
					<option value="goa">Goa</option>
					<option value="guj">Gujarat</option>
					<option value="har">Haryana</option>
					<option value="hp">Himachal Pradesh</option>
					<option value="jk">Jammu and Kashmir</option>
					<option value="jhr">Jharkhand</option>
					<option value="krn">Karnataka</option>
					<option value="ker">Kerela</option>
					<option value="mp">Madhya Pradesh</option>
					<option value="mah">Maharashtra</option>
					<option value="man">Manipur</option>
					<option value="meg">Meghalaya</option>
					<option value="miz">Mizoram</option>
					<option value="nag">Nagaland</option>
					<option value="odi">Odisha</option>
					<option value="pnb">Punjab</option>
					<option value="raj">Rajasthan</option>
					<option value="sik">Sikkim</option>
					<option value="tam">Tamil Nadu</option>
					<option value="tel">Telangana</option>
					<option value="tri">Tripura</option>
					<option value="utt">Uttarakhand</option>
					<option value="up">Uttar Pradesh</option>
					<option value="wb">West Bengal</option>
				</select>
				<p class="field">CITY <span class="error" id="addrErr">*</span></p>
				<input class="text" type="text" name="city">
				<p class="field">LOCALITY <span class="error" id="addrErr">*</span></p>
				<input class="text" type="text" name="loc">
				<p class="field">PASSWORD <span class="error" id="passErr">*</span></p>
				<input class="text" type="password" name="pass">
				<div class="login">
					<button class="loginbut" onclick="return validate3()" formaction="couchpotatoeslogin.html">Signup</button>
				</div>
			</form>
		</div>
	    </div>
	</div>
</body>
</html>
