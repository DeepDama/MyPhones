<?php
$server="localhost";
$uid="root";
$pwd="";
$db="search";
$con =new mysqli($server,$uid,$pwd,$db);
if($con->connect_error)
{
	die("connection failed".connect_error());
}
else
{
	echo("connection successful");
} 
$search=$_POST['SEARCH'];

$qy="select * from search where name='$search'";

mysql_query($con,$qy);


