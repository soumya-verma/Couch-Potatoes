<?php
$sn="localhost";
$un="root";
$pass="";
$con=mysqli_connect($sn,$un,$pass);

$sql='create database abcd';
if(!mysqli_query($con,$sql);)
{
	echo "database creation failed";
}
$sql="use abcd";
mysqli_query($con,$sql);
$sql1='create table buyer(name varchar(50),email varchar(20),phone int(10),state varchar(30),city varchar(20),locality varchar(50),pass varchar(20))';
mysqli_query($con,$sql1);
?>