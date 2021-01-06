<?php
$sn="localhost";
$un="root";
$pass="";
$con=mysqli_connect($sn,$un,$pass);

$sql='create database abcd';
mysqli_query($con,$sql)
// if(!mysqli_query($con,$sql))
// {
// 	echo "database creation failed";
// }
$sql='use abcd';
mysqli_query($con,$sql);
$sql1='create table seller(name varchar(50),gst varchar(15),email varchar(20),phone int(10),company varchar(40),state varchar(30),city varchar(20),locality varchar(50),pass varchar(20))';
mysqli_query($con,$sql1);
?>