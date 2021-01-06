<?php

include 'sellertable.php';

$name = $_POST['username'];
$gst = $_POST['gst'];
$email = $_POST['email'];
$phn = $_POST['phone'];
$comp = $_POST['comp'];
$state = $_POST['state'];
$city = $_POST['city'];
$loc = $_POST['loc'];
$pass = $_POST['pass'];

$sql2="insert into seller values('$name','$gst','$email','$phn','$comp','$state','$city','$loc','$pass')";


if(mysqli_query($con,$sql2)){
            echo "data inserted successfully";
        }
        else{
            echo "failed";
        }
mysqli_close ($con);

?>