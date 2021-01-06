<?php

include 'buyertable.php';

$name = $_POST['username'];
$email = $_POST['email'];
$phn = $_POST['phone'];
$state = $_POST['state'];
$city = $_POST['city'];
$loc = $_POST['loc'];
$pass = $_POST['pass'];

$sql2="insert into buyer values('$name','$email','$phn','$state','$city','$loc','$pass')";


if(mysqli_query($con,$sql2)){
            echo "data inserted successfully";
        }
        else{
            echo "failed";
        }
mysqli_close ($con);

?>